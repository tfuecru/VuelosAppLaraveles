<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SettingController extends Controller {
    
    public function index() {
        // Parte superior con el radio button
        $checkedList = '';
        $checkedCreate = '';
        $afterInsert = session('afterInsert', 'show flight');
        
        if($afterInsert == 'show flight') {
            $checkedList = 'checked';
        } else {
            $checkedCreate = 'checked';
        }
        
        // Parte inferior con el select
        $afterEdit = session('afterEdit', 'movie');
        $afterEditOptions = [
            'edit' => 'Show edit flight form',
            'flight' => 'Show flight list',
            'show' => 'Show flight'
        ];
        
        return view('setting.index', ['checkedList' => $checkedList,
                                      'checkedCreate' => $checkedCreate,
                                      'afterEditOptions' => $afterEditOptions,
                                      'selectedEditOption' => $afterEdit]);
    }
    
    
    public function update(Request $request) {
        session(['afterInsert' => $request->afterInsert,
                 'afterEdit' => $request->afterEdit]);
        
        return redirect('flight')->with(['message' => 'Setting have been updated.']); 
    }
    
}
