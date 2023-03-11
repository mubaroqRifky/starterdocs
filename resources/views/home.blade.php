@extends('layouts.main')

@section('content')
<div class="p-4 card">
    <div class="row" style="row-gap: 1.5rem">
        <x-code title="Example Tag HTML" class="col-lg-6">
            <x-slot name="code">
                <code>
                    <i><</i><q>div</q><i>></i>
                        <i style="margin-left: 2rem"><</i><q>h1</q><i>></i><b>Ini Heading Tag</b><i><</i><i>/</i><q>h1</q><i>></i>
                    <i><</i><i>/</i><q>div</q><i>></i> 
                </code>
            </x-slot>
        </x-code>

        <x-code title="Example Tag HTML with Class" class="col-lg-6">
            <x-slot name="code">
                <code>
                    <i><</i><q>div</q><u>&nbsp;class</u><b>=</b><s>"nama-class"</s><i>></i>
                        <i style="margin-left: 2rem"><</i><q>h1</q><i>></i><b>Ini Heading Tag</b><i><</i><i>/</i><q>h1</q><i>></i>
                    <i><</i><i>/</i><q>div</q><i>></i> 
                </code>
            </x-slot>
        </x-code>

        <x-code title="Example Tag HTML with Function" class="col-lg-6">
            <x-slot name="code">
                <code>
                    <i><</i><q>div</q><u>&nbsp;class</u><b>=</b><s>"nama-class"</s><u>&nbsp;onclick</u><b>=</b><s>"</s><em>clickFunction</em><s>()"</s><i>></i>
                        <i style="margin-left: 2rem"><</i><q>h1</q><i>></i><b>Ini Heading Tag</b><i><</i><i>/</i><q>h1</q><i>></i>
                    <i><</i><i>/</i><q>div</q><i>></i> 
                </code>
            </x-slot>
        </x-code>

        <x-code title="Example Tag HTML with Function" class="col-lg-6">
            <x-slot name="code">
                <code>
                    <i><</i><q>div</q><u>&nbsp;class</u><b>=</b><s>"nama-class"</s><i>></i>
                        <i style="margin-left: 2rem"><</i><q>h1</q><i>></i><b>Ini Heading Tag</b><i><</i><i>/</i><q>h1</q><i>></i>
                        <i style="margin-left: 2rem"><</i><q>button</q><u>&nbsp;onclick</u><b>=</b><s>"</s><em>clickFunction</em><s>()"</s><i>></i><b>Submit</b><i><</i><i>/</i><q>button</q><i>></i>
                    <i><</i><i>/</i><q>div</q><i>></i> 
                </code>
            </x-slot>
        </x-code>

        <x-code title="Example Tag HTML with Function" class="col-md-12">
            <x-slot name="code">
                <code>
                    <i><</i><q>div</q><u>&nbsp;class</u><b>=</b><s>"mb-3"</s><i>></i>
                        <i style="margin-left: 2rem"><</i><q>label</q><u>&nbsp;for</u><b>=</b><s>"exampleFormControlInput1"</s><u>&nbsp;class</u><b>=</b><s>"form-label"</s><i>></i><b>Email address</b><i><</i><i>/</i><q>label</q><i>></i>
                        <i style="margin-left: 2rem"><</i><q>input</q><u>&nbsp;type</u><b>=</b><s>"email"</s><u>&nbsp;class</u><b>=</b><s>"form-control"</s><u>&nbsp;id</u><b>=</b><s>"exampleFormControlInput1"</s><u>&nbsp;placeholder</u><b>=</b><s>"name@example.com"</s><i>></i>
                    <i><</i><i>/</i><q>div</q><i>></i> 
                </code>
            </x-slot>
        </x-code>
    </div>
</div>
@endsection