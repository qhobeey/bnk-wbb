@extends('layouts.app')

@section('content')
<main class="main-content w-full px-[var(--margin-x)] pb-8">
    <div class="mt-4 grid grid-cols-12 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
        <div class="col-span-12 grid grid-cols-12 rounded-lg bg-gradient-to-r from-blue-500 to-indigo-600 py-5 sm:py-6">
            <div class="col-span-12 sm:col-span-6 lg:col-span-4">
                <div class="px-4 text-white sm:px-5">
                    <div class="-mt-1 flex items-center space-x-2">
                        <h2 class="text-base font-medium tracking-wide">Balance</h2>
                        <div x-data="usePopper({placement:'bottom-end',offset:4})" @click.outside="isShowPopper &amp;&amp; (isShowPopper = false)" class="inline-flex">
                            <button x-ref="popperRef" @click="isShowPopper = !isShowPopper" class="btn h-8 w-8 rounded-full p-0 hover:bg-white/20 focus:bg-white/20 active:bg-white/25">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                                </svg>
                            </button>

                            
                        </div>
                    </div>

                    <div class="mt-3">
                        <p class="text-2xl font-semibold">£{{number_format($account->balance, 2)}}</p>
                        <p class="text-xs">+ 6.5%</p>
                    </div>

                    <div class="mt-4 flex space-x-7">
                        <div>
                            <div x-data="{showModal:false}">
                                <button @click="showModal = true" class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                    Transfer Money 
                                </button>
                                @include('admin.fragments.transfer-modal')
                            </div>
                        </div>
                        <div>
                            <div class="mt-1 flex items-center space-x-2">
                                <button disabled
                                    class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                    Deposit Funds
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 flex space-x-7">
                        <div>
                            <div class="mt-1 flex items-center space-x-2">
                                <button disabled
                                    class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                    Transfer To Card 
                                </button>
                            </div>
                        </div>
                        <div>
                            <div class="mt-1 flex items-center space-x-2">
                                <button disabled
                                    class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                    Withdraw Funds
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-12 mt-5 sm:col-span-6 sm:mt-0 lg:col-span-8">
                <div class="swiper px-5 sm:pl-0 swiper-initialized swiper-horizontal swiper-backface-hidden" x-init="$nextTick(()=>new Swiper($el,{  slidesPerView: 'auto', spaceBetween: 16}))">
                    <div class="swiper-wrapper" id="swiper-wrapper-41a38a4884c6d18a" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                        <div class="swiper-slide relative h-40 w-64 shrink-0 rounded-lg bg-gradient-to-br from-[#ffffff55] to-[#ffffff20] swiper-slide-active" role="group" aria-label="1 / 4" style="margin-right: 16px;">
                            <div class="absolute inset-0 flex flex-col justify-between rounded-lg border border-white/10 p-5">
                                <div class="flex items-center justify-between">
                                    <img class="h-3" src="/assets/images/payments/cc-visa-white.svg" alt="image" />
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="1.5"
                                            d="M5.343 7.257a.5.5 0 01.354.147 6.5 6.5 0 010 9.192.64.64 0 00-.073.087 4.718 4.718 0 01-.56-.094 1.301 1.301 0 01-.109-.03.5.5 0 01.035-.67 5.5 5.5 0 000-7.778.5.5 0 01.353-.854zm-.422 9.288a.06.06 0 010 0zM15 1.6a.5.5 0 01.354.147 14.5 14.5 0 010 20.506.5.5 0 11-.708-.707 13.5 13.5 0 000-19.092A.5.5 0 0115 1.6zM10.172 4.43a.5.5 0 01.353.146 10.5 10.5 0 010 14.85.5.5 0 11-.707-.707 9.5 9.5 0 000-13.436.5.5 0 01.354-.853z"
                                        ></path>
                                    </svg>
                                </div>
                                <div class="text-white">
                                    <p class="text-lg font-semibold tracking-wide">
                                        £{{number_format($account->card1, 2)}}
                                    </p>
                                    <p class="mt-1 text-xs font-medium">
                                        **** **** **** 7946
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide relative h-40 w-64 shrink-0 rounded-lg bg-gradient-to-br from-[#ffffff55] to-[#ffffff20] swiper-slide-next" role="group" aria-label="2 / 4" style="margin-right: 16px;">
                            <div class="absolute inset-0 flex flex-col justify-between rounded-lg border border-white/10 p-5">
                                <div class="flex items-center justify-between">
                                    <img class="h-3" src="/assets/images/payments/cc-visa-white.svg" alt="image" />
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="1.5"
                                            d="M5.343 7.257a.5.5 0 01.354.147 6.5 6.5 0 010 9.192.64.64 0 00-.073.087 4.718 4.718 0 01-.56-.094 1.301 1.301 0 01-.109-.03.5.5 0 01.035-.67 5.5 5.5 0 000-7.778.5.5 0 01.353-.854zm-.422 9.288a.06.06 0 010 0zM15 1.6a.5.5 0 01.354.147 14.5 14.5 0 010 20.506.5.5 0 11-.708-.707 13.5 13.5 0 000-19.092A.5.5 0 0115 1.6zM10.172 4.43a.5.5 0 01.353.146 10.5 10.5 0 010 14.85.5.5 0 11-.707-.707 9.5 9.5 0 000-13.436.5.5 0 01.354-.853z"
                                        ></path>
                                    </svg>
                                </div>
                                <div class="text-white">
                                    <p class="text-lg font-semibold tracking-wide">
                                        £{{number_format($account->card2, 2)}}
                                    </p>
                                    <p class="mt-1 text-xs font-medium">
                                        **** **** **** 5699
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide relative h-40 w-64 shrink-0 rounded-lg bg-gradient-to-br from-[#ffffff55] to-[#ffffff20]" role="group" aria-label="3 / 4" style="margin-right: 16px;">
                            <div class="absolute inset-0 flex flex-col justify-between rounded-lg border border-white/10 p-5">
                                <div class="flex items-center justify-between">
                                    <img class="h-3" src="/assets/images/payments/cc-visa-white.svg" alt="image" />
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="1.5"
                                            d="M5.343 7.257a.5.5 0 01.354.147 6.5 6.5 0 010 9.192.64.64 0 00-.073.087 4.718 4.718 0 01-.56-.094 1.301 1.301 0 01-.109-.03.5.5 0 01.035-.67 5.5 5.5 0 000-7.778.5.5 0 01.353-.854zm-.422 9.288a.06.06 0 010 0zM15 1.6a.5.5 0 01.354.147 14.5 14.5 0 010 20.506.5.5 0 11-.708-.707 13.5 13.5 0 000-19.092A.5.5 0 0115 1.6zM10.172 4.43a.5.5 0 01.353.146 10.5 10.5 0 010 14.85.5.5 0 11-.707-.707 9.5 9.5 0 000-13.436.5.5 0 01.354-.853z"
                                        ></path>
                                    </svg>
                                </div>
                                <div class="text-white">
                                    <p class="text-lg font-semibold tracking-wide">
                                        £{{number_format($account->card3, 2)}}
                                    </p>
                                    <p class="mt-1 text-xs font-medium">
                                        **** **** **** 8945
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </div>

        <div class="card group col-span-12 pb-5 lg:col-span-8">
            <div class="my-3 flex flex-col justify-between px-4 sm:flex-row sm:items-center sm:px-5">
                <div class="flex flex-1 items-center justify-between space-x-2 sm:flex-initial">
                    <h2 class="text-sm+ font-medium tracking-wide text-slate-700 dark:text-navy-100">
                        Payment History
                    </h2>
                    
                </div>
                <div class="flex items-center space-x-4">
                    <div class="flex cursor-pointer items-center space-x-2">
                        <div class="h-3 w-3 rounded-full bg-accent"></div>
                        <p>Deposit</p>
                    </div>
                    <div class="flex cursor-pointer items-center space-x-2">
                        <div class="h-3 w-3 rounded-full bg-info"></div>
                        <p>Withdrawal</p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-4 px-4 sm:gap-5 sm:px-5 lg:gap-6 lg:px-5">
                <div class="col-span-12 sm:order-last sm:col-span-6 sm:mt-2 xl:col-span-7">
                    <div class="ax-transparent-gridline">
                        <div x-init="$nextTick(() => { $el._x_chart = new ApexCharts($el,pages.charts.historyTransactionsLine); $el._x_chart.render() });" style="min-height: 330px;">
                            
                        </div>
                    </div>
                </div>
                <div class="col-span-12 rounded-lg bg-slate-50 p-3 dark:bg-navy-600 sm:col-span-6 xl:col-span-5">
                    <div class="space-y-4">
                        <div class="flex cursor-pointer items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div>
                                    <p class="text-slate-700 line-clamp-1 dark:text-navy-100">
                                        Konnor Guzman
                                    </p>
                                    <p class="text-xs text-slate-400 line-clamp-1 dark:text-navy-200">
                                        Aug 21, 2023 - 08:05
                                    </p>
                                </div>
                            </div>
                            <p class="font-medium text-success">£660.22</p>
                        </div>
                        <div class="flex cursor-pointer items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div>
                                    <p class="text-slate-700 line-clamp-1 dark:text-navy-100">
                                        Henry Curtis
                                    </p>
                                    <p class="text-xs text-slate-400 line-clamp-1 dark:text-navy-200">
                                        Aug 19, 2023 - 11:55
                                    </p>
                                </div>
                            </div>
                            <p class="font-medium text-success">£33.63</p>
                        </div>
                        <div class="flex cursor-pointer items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div>
                                    <p class="text-slate-700 line-clamp-1 dark:text-navy-100">
                                        Derrick Simmons
                                    </p>
                                    <p class="text-xs text-slate-400 line-clamp-1 dark:text-navy-200">
                                        Jul 16, 2023 - 14:45
                                    </p>
                                </div>
                            </div>
                            <p class="font-medium text-success">£674.63</p>
                        </div>
                        <div class="flex cursor-pointer items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div>
                                    <p class="text-slate-700 line-clamp-1 dark:text-navy-100">
                                        Kartina West
                                    </p>
                                    <p class="text-xs text-slate-400 line-clamp-1 dark:text-navy-200">
                                        Jun 13, 2023 - 11:30
                                    </p>
                                </div>
                            </div>
                            <p class="font-medium text-error">£547.63</p>
                        </div>
                        <div class="flex cursor-pointer items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div>
                                    <p class="text-slate-700 line-clamp-1 dark:text-navy-100">
                                        Samantha Shelton
                                    </p>
                                    <p class="text-xs text-slate-400 line-clamp-1 dark:text-navy-200">
                                        Mar 10, 2023 - 09:41
                                    </p>
                                </div>
                            </div>
                            <p class="font-medium text-success">£736.24</p>
                        </div>
                        <div class="flex cursor-pointer items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div>
                                    <p class="text-slate-700 line-clamp-1 dark:text-navy-100">
                                        Joe Perkins
                                    </p>
                                    <p class="text-xs text-slate-400 line-clamp-1 dark:text-navy-200">
                                        Feb 06, 2023 - 11:41
                                    </p>
                                </div>
                            </div>
                            <p class="font-medium text-success">£558.88</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card col-span-12 px-4 pb-5 sm:px-5 lg:col-span-4">
            <div class="flex items-center justify-between py-3">
                <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                    Send Money
                </h2>
            </div>
            <form action="{{route('admin.transfer')}}" method="get">
                @csrf

                <div class="mt-2 space-y-4">
                    <label class="block">
                        <span class="text-xs+">Enter Account Number</span>
                        <input
                            x-input-mask="{
                            creditCard: true
                        }"
                            class="form-input mt-1.5 h-9 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="**** **** **** ****"
                            type="text"
                            required
                        />
                    </label>
                    <label class="block">
                        <span class="text-xs+">Enter Bank Name</span>
                        <input
                            class="form-input mt-1.5 h-9 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder=""
                            type="text"
                            required
                        />
                    </label>
                    <label class="block">
                        <span class="text-xs+">Enter Account Name</span>
                        <input
                            class="form-input mt-1.5 h-9 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder=""
                            type="text"
                            required
                        />
                    </label>
                    <div>
                        <span class="text-xs+">Amount</span>

                        <div class="mt-1.5 flex h-9 -space-x-px">
                            <select
                                class="form-select rounded-l-lg border border-slate-300 bg-white px-3 py-2 pr-9 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent"
                            >
                                <option>£</option>
                            </select>
                            <input
                                class="form-input w-full rounded-r-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                placeholder="Price"
                                type="number"
                                required
                            />
                        </div>
                    </div>
                </div>
                <button type="submit"
                    class="btn mt-5 h-10 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                    Send Money
                </button>
            </form>
        </div>
        {{--  --}}
        {{-- <div class="col-span-12">
            <div class="card mt-3">
                <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
                    <table class="is-hoverable w-full text-left">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                    Transaction ID
                                </th>
                                <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                    Account Name
                                </th>
                                <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                    Account Number
                                </th>
                                <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                    Date
                                </th>
                                <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                    Status
                                </th>
                                <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                    Amount
                                </th>
        
                                <th class="whitespace-nowrap rounded-tr-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    <p class="font-medium text-primary dark:text-accent-light">
                                        #95647
                                    </p>
                                </td>
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    <p class="font-medium">25 May 2021</p>
                                    <p class="mt-0.5 text-xs">01:25 AM</p>
                                </td>
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    <div class="flex items-center space-x-4">
                                        <div class="avatar h-9 w-9">
                                            <img class="mask is-squircle" src="images/avatar/avatar-20.jpg" alt="avatar" />
                                        </div>
        
                                        <span class="font-medium text-slate-700 dark:text-navy-100">Anthony Jensen </span>
                                    </div>
                                </td>
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    <p class="w-48 overflow-hidden text-ellipsis text-xs+">
                                        260 W. Storm Street New York, NY 10025.
                                    </p>
                                </td>
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    <div class="badge bg-warning/10 text-warning dark:bg-warning/15">
                                        Unconfirmed
                                    </div>
                                </td>
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    <div class="badge space-x-2.5 text-xs+ text-warning">
                                        <div class="h-2 w-2 rounded-full bg-current"></div>
                                        <span>Await Auth</span>
                                    </div>
                                </td>
        
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    <p class="text-sm+ font-medium text-slate-700 dark:text-navy-100">
                                        $2 654
                                    </p>
                                </td>
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    <button class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div> --}}
        
    </div>
    
</main>
@endsection