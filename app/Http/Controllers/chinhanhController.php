<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChiNhanh;
use Illuminate\Support\Facades\DB;


class chinhanhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
        $chinhanh = ChiNhanh::orderBy('id', 'ASC')->paginate(5);
        return view('chinhanh.index', compact('chinhanh'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chinhanh.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'machinhanh'=>'required|unique:machinhanh',
            'tenchinhanh'=>'required'
        ],
        [
            'required'=>':attribute không được bỏ trống ',
            'unique'=>':attribute phải là duy nhất',
        ],
        [
            'machinhanh'=>'mã chi nhánh',
            'tenchinhanh'=>'tên chi nhánh',
        ]
        );
        $input = $request->all();
        $chinhanh = ChiNhanh::create($input);
        return redirect()->route('chinhanh.index')->with('success','Đã thêm thành công chi nhánh ');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
