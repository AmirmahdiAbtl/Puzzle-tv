<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\File;
use App\Models\History;
use App\Models\Test;
use App\Services\Uploader\Uploader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;

class TestController extends Controller
{
    private $uploader;

    public function __construct(Uploader $uploader)
    {
        $this->uploader = $uploader;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tests = Test::all();
        return view('admin.tests.index', compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
        ]);

        $text = $this->generateHistoryDescription($request, null);

        $test = Test::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'AlsoKnownAs' => $request->AlsoKnownAs,
            'WhyGetTested' => $request->WhyGetTested,
            'WhenToGetTested' => $request->WhenToGetTested,
            'SampleRequired' => $request->SampleRequired,
            'TestPreparationNeeded' => $request->TestPreparationNeeded,
            'Whatisbeingtested' => $request->Whatisbeingtested,
        ]);

        History::create([
            'user_id' => auth()->user()->id,
            'test_id' => $test->id,
            'test_name' => $test->name,
            'action' => 'testCreate',
            'description' => $text,
        ]);

        return redirect()->route('test.index')->with('success', true);
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
    public function edit(Test $test)
    {
        return view('admin.tests.edit', compact('test'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
        ]);

        $text = $this->generateHistoryDescription($request, $test);

        $test->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'AlsoKnownAs' => $request->AlsoKnownAs,
            'WhyGetTested' => $request->WhyGetTested,
            'WhenToGetTested' => $request->WhenToGetTested,
            'SampleRequired' => $request->SampleRequired,
            'TestPreparationNeeded' => $request->TestPreparationNeeded,
            'Whatisbeingtested' => $request->Whatisbeingtested,
        ]);

        History::create([
            'user_id' => auth()->user()->id,
            'test_id' => $test->id,
            'test_name' => $test->name,
            'description' => $text,
            'action' => 'testUpdate',
        ]);

        return redirect()->route('test.index')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test = Test::find($id);

        Faq::where('test_id', $test->id)->delete();

        $test->delete();

        History::create([
            'user_id' => auth()->user()->id,
            'test_name' => $test->name,
            'action' => 'testDelete',
        ]);

        return redirect()->route('test.index')->with('success', true);
    }

    protected function checkColumn($column, $request, $data)
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

    protected function generateHistoryDescription($request, $test)
    {
        $text = $this->checkColumn('name', $request, $test) .
            $this->checkColumn('slug', $request, $test) .
            $this->checkColumn('AlsoKnownAs', $request, $test) .
            $this->checkColumn('WhyGetTested', $request, $test) .
            $this->checkColumn('WhenToGetTested', $request, $test) .
            $this->checkColumn('SampleRequired', $request, $test) .
            $this->checkColumn('TestPreparationNeeded', $request, $test) .
            $this->checkColumn('Whatisbeingtested', $request, $test);

        return $text;
    }

    public function files(Test $test)
    {
        return view('admin.tests.files',compact('test'));
    }

    public function fileStore(Request $request, Test $test)
    {
        $file = $this->uploader->upload();

        $test->files()->attach($file->id);

        return redirect()->back()->with('success',true);
    }

    public function fileDelete(Test $test,File $file)
    {
        $test->files()->detach($file->id);

        $file->delete();

        return redirect()->back()->with('success',true);
    }
}
