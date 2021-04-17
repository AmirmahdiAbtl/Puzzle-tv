<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\History;
use App\Models\Test;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Test $test)
    {
        return view('admin.faq.index',compact('test'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Test $test)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        $text = $this->generateHistoryDescription($request , null);

        $faq = Faq::create([
            'test_id' => $test->id,
            'question' => $request['question'],
            'answer' => $request['answer'],
        ]);

        History::create([
            'user_id' => auth()->user()->id,
            'test_id' => $test->id,
            'test_name' => $test->name,
            'faq_question' => $faq->question,
            'faq_id' => $faq->id,
            'action' => 'faqCreate',
            'description' => $text,
        ]);
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        return view('admin.faq.edit',compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        $text = $this->generateHistoryDescription($request , $faq);

        $faq->update($request->only(['question', 'answer']));

        History::create([
            'user_id' => auth()->user()->id,
            'test_id' => $faq->test->id,
            'faq_id' => $faq->id,
            'test_name' => $faq->test->name,
            'faq_question' => $faq->question,
            'action' => 'faqUpdate',
            'description' => $text,
        ]);

        return redirect()->route('test.faq',$faq->test->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        History::create([
            'user_id' => auth()->user()->id,
            'test_id' => $faq->test->id,
            'test_name' => $faq->test->name,
            'faq_question' => $faq->question,
            'action' => 'faqDelete',
        ]);

        $faq->delete();

        return redirect()->back();
    }

    protected function checkColumn($column,$request,$data)
    {
        if ($data != null) {
            if ($request[$column] != $data[$column]) {
                return $data[$column] . ' ==> ' . $request[$column] . '<br>';
            }
        } else {
            if ($request[$column] != null) {
                return ' ==> ' . $request[$column] . '<br>';
            }
        }
    }

    protected function generateHistoryDescription($request,$test)
    {
        $text = $this->checkColumn('question',$request,$test).
                $this->checkColumn('answer',$request,$test);

        return $text;
    }
}
