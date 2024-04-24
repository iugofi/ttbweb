

@extends('User.Layouts.layout')

@section('title', 'Test')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')


<div class="flex items-center">
    <input type="checkbox" id="hs-basic-with-description-checked" class="ti-switch" checked>
    <label for="hs-basic-with-description-checked" class="text-sm text-gray-500 ms-3 dark:text-[#8c9097] dark:text-white/50">Dark</label>
</div>
<script>$(document).ready(function() {
    // Function to toggle dark class based on checkbox state
    $("#hs-basic-with-description-checked").change(function() {
        // Check if checkbox is checked
        if ($(this).prop("checked")) {
            // Add dark class to elements with class h-full
            $(".h-full").addClass("dark");
        } else {
            // Remove dark class from elements with class h-full
            $(".h-full").removeClass("dark");
        }
    });
});
      </script>
    

         



@endsection