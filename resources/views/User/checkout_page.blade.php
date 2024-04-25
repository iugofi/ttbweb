

@extends('User.Layouts.layout')

@section('title', 'Chekout Page')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')
@section('content')


<style>
    body{
        background-color: rgb(var(--body-bg));
    }
</style>

<div class="content">
    <div class="main-content">

         
        <div class="grid grid-cols-12 gap-6 mt-6">
            <div class="xl:col-span-8 col-span-12">
                <div class="team-members" id="team-members">
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="team-header">
                                        <div class="flex flex-wrap items-center justify-between">
                                            <div class="h5 font-semibold mb-0">Checkout</div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Email Verification
                                    </div>                        
                                </div>
                                <div class="box-body">
                                    <div class="grid grid-cols-12 sm:gap-x-6 sm:gap-y-4">
                                        <div class="md:col-span-12 col-span-12 mb-4">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control" >
                                        </div>
                                        <div class="md:col-span-6 col-span-12 mb-4">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control" placeholder="First name"
                                                aria-label="First name">
                                        </div>
                                        <div class="md:col-span-6 col-span-12 mb-4">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Last name"
                                                aria-label="Last name">
                                        </div>
                                       
                                        
                                       
                                        <div class="md:col-span-12 col-span-12">
                                            <button type="submit" class="ti-btn ti-btn-primary-full !mb-0">Sign in</button>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>

                       
                    </div>
                    
                </div>
            </div>
            <div class="xl:col-span-4 col-span-12">
                <div class="team-groups">
                    <div class="box">
                        
                        <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12 col-span-12 md:border-e md:border-b-0 border-b border-dashed dark:border-defaultborder/10 pe-0" style="box-shadow: 0px -1px 7px 3px #0000005e;">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

     


    </div>
</div>

         



@endsection