@extends('layouts.app')

@section('content')
<div class="container-fluid default-dashboard">
    <div class="row widget-grid">
        <div class="col-xl-5 col-md-6 proorder-xl-1 proorder-md-1">
            <div class="card profile-greeting p-0">
                <div class="card-body">
                    <div class="img-overlay">
                        <h1>Good day, {{auth()->user()->name}}</h1>
                        <p>Welcome to your dashboard account!</p>
                        <a class="btn" href="{{route('admin.dashboard')}}">Transfer Funds</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 proorder-xl-2 proorder-md-2">
            <div class="card">
                <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                        <h4>Opening Accounts</h4>
                    </div>
                </div>
                <div class="card-body pb-0 opening-box">
                    <div class="d-flex align-items-center gap-2">
                        <h2>$ {{number_format($account->balance, 2)}}</h2>
                    </div>
                    <div id="growthchart"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-5 proorder-xl-3 proorder-md-3">
            <div class="card">
                <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                        <h4>Credit Card 1</h4>
                    </div>
                </div>
                <div class="card-body pb-0 opening-box">
                    <div class="d-flex align-items-center gap-2">
                        <h2>$ {{number_format($account->card1, 2)}}</h2>
                    </div>
                    <br>
                </div>
            </div>
            <div class="card">
                <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                        <h4>Credit Card 2</h4>
                    </div>
                </div>
                <div class="card-body pb-0 opening-box">
                    <div class="d-flex align-items-center gap-2">
                        <h2>$ {{number_format($account->card2, 2)}}</h2>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <div class="col-xl-7 proorder-xl-5 box-col-7 proorder-md-5">
            <div class="card">
                <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                        <h4>Recent Transactions</h4>
                        <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown0" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown0">
                                <a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0 projects px-0">
                    <div class="table-responsive theme-scrollbar">
                        <table class="table display" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>Trans. ID</th>
                                    <th>Account name</th>
                                    <th>Account number</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $transaction)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 ms-2">
                                                <a href="#"> <h6>{{$transaction->trans_id}}</h6></a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="project-dot">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0"><span class="bg-primary"></span></div>
                                            <div class="flex-grow-1">
                                                <h6>{{$transaction->account_name}}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$transaction->account_number}}</td>
                                    <td>{{number_format($transaction->amount, 2)}}</td>
                                    <td>{{\Carbon\Carbon::parse($transaction->date)->toFormattedDateString()}}</td>
                                    <td>{{$transaction->status}}</td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-5 col-md-7 proorder-xl-4 box-col-5 proorder-md-6">
            <div class="card">
                <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                        <h4>Customer Transaction</h4>
                        <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown11" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown11">
                                <a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body pb-0">
                    <div id="customer-transaction"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection