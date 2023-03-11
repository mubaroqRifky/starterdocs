@extends('layouts.main')

@section('breadcumbs')
    @php
        $breadcumbs = [
            [
                'name' => 'Home',
                'route' => 'home'
            ],
            [
                'name' => 'Forms',
                'route' => ''
            ],
        ];
    @endphp
    @include('layouts.breadcumbs', compact('breadcumbs'))
@endsection


@section('content')
<div class="d-grid gap-3 p-4 card align-content-start">
    <section class="row">
        <div class="col-md-6 fs-6">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
        
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="inputPassword">
                </div>
            </div>
        
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        
            <div class="mb-3">
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" type="file" id="formFile">
            </div>

            <select class="mb-3 form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>

            <div class="mb-3">
                <label for="select_label_vertical" class="form-label">Select with label</label>
                <select class="form-select" id="select_label_vertical" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class="mb-3 row align-items-center">
                <label for="select_label" class="col-sm-3 form-label mt-2">Select Option</label>
                <select class="col-sm-9 form-select w-auto flex-grow-1" id="select_label" style="margin-right: .8rem" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Radio Button</label>
                <div class="row align-items-center px-3">
                    <div class="col-md-6 form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Default radio
                        </label>
                    </div>

                    <div class="col-md-6 form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Default checked radio
                        </label>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Checkbox</label>
                <div class="row align-items-center px-3">
                    <div class="col-md-6 form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Default switch</label>
                    </div>
                    <div class="col-md-6 form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch</label>
                    </div>
                    <div class="col-md-6 form-check">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Check here</label>
                    </div>
                    <div class="col-md-6 form-check">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Check here</label>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="col-md-6 d-grid gap-3 align-content-start">
            <h5 class="fw-bold">Basic Form Input</h5>
            <p>Form controls are styled with a mix of Sass and CSS variables, allowing them to adapt to color modes and support any customization method.</p>
            <p>Add the disabled boolean attribute on an input to give it a grayed out appearance, remove pointer events, and prevent focusing.</p>
            <p>Add the readonly boolean attribute on an input to prevent modification of the input’s value. readonly inputs can still be focused and selected, while disabled inputs cannot.</p>
            <p>If you want to have <s>readonly</s> elements in your form styled as plain text, replace .form-control with .form-control-plaintext to remove the default form field styling and preserve the correct margin and padding.</p>

            <h5 class="fw-bold mt-3">Variables</h5>
            <p>Form controls make use of a small amount of CSS variables to support custom styling across color modes.</p>
            <p>Set heights using classes like .form-control-lg and .form-control-sm.</p>
        </div>
    </section>
</div>
@endsection 