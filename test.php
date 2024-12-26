<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Fr CRM - Deal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/x-icon" href="favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    @include('component/head')

</head>
<style>
    .box-card {
        margin-top: 20px;
    }

    .low-priority {
        background-color: #e3d447;
        /* Light green for low priority */
    }

    .medium-priority {
        background-color: #3eaaecd6;
        /* Light yellow for medium priority */
    }

    .high-priority {
        background-color: #bf463f;
        /* Light red for high priority */
    }

    .main-content {
        background: #ffffff;
    }

    .busines-left-top {
        background-color: white;
        bos-shadow: 5px 5px 5px #717171;
    }

    .timeline-container {
        margin-top: 1em;
    }

    .timeline-end-date {
        padding: 10px !important;
        height: auto !important;
        width: fit-content !important;
        border-radius: 1em !important;
        background-color: blue !important;
        color: white !important;
    }

    .activities-div {
        background-color: white !important;
        width: 97% !important;
        margin-left: 12px;
        border-radius: 10px;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        margin-bottom: 15px;
        padding: 10px 20px;
        border-radius: 15px;
    }

    .activities-div>div {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 0 0 10px;
        font-size: 16px;
        font-weight: 600;
        border-bottom: 1px solid #eee;
        padding: 8px 0 14px;
    }

    .deal-histor-tab {
        border-top-left-radius: 10px !important;
        border-top-right-radius: 10px !important;
        padding: 1px 15px;
        background-color: #AC61EE !important;
    }

    .deal-histor-tab a {
        color: white !important;
    }

    .right-box-header,
    .right-box-header div {
        font-size: 18px !important;
    }

    .detail-point-heads {
        color: #989CA2 !important;
        margin: 0 0 2px;
    }

    .header-name {
        font-weight: bolder !important;
        font-size: 30px !important;
    }

    .detail--point---v {
        margin-bottom: 1em;
        text-transform: uppercase;
        font-size: 16px;
        font-weight: 700;
    }

    .part--details---0 {
        font-weight: bold;
    }

    .common-headings-r-00 {
        padding: 10px 0px;
    }

    .contract-summary-comp {
        position: relative;
        margin: 2em;
        margin-top: 1em;
        padding: 1.5em;
        width: 72.5%;
        background-color: white;
        border-radius: 1em;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        border: 1px solid #eeeeeecf;
    }

    .contract-summary-comp .head {
        font-size: 16px
    }

    .contract-summary-comp .sticker {
        position: absolute;
        right: 10px;
        top: 10px;
        padding: 0.5em 1em;
        border-radius: 1em;
        background-color: green;
        color: white;
    }

    .contract-summary-comp .yellow {
        position: absolute;
        right: 10px;
        top: 10px;
        padding: 0.5em 1em;
        border-radius: 1em;
        background-color: rgb(221, 231, 194);
        color: rgb(0, 0, 0);
    }

    .contract-summary-comp .warning {
        position: absolute;
        right: 10px;
        top: 10px;
        padding: 0.5em 1em;
        border-radius: 1em;
        background-color: rgb(241, 19, 19);
        color: rgb(255, 255, 255);
    }


    .main-heading--00 {
        font-size: 2.5em;
        font-weight: bolder;
        margin: 5px;
        text-align: center;
    }

    .back-arrow {
        display: flex;
        justify-content: space-between;
    }

    .timeline-end {
        margin-top: -7px;
        margin-bottom: 40px;
    }

    .commentContainer {
        margin-top: -23px;
        max-height: 0px;
        overflow: hidden;
        transition: max-height ease-in-out 0.3s;
    }

    .commentContainer.show {
        max-height: 100%;
        transition: max-height ease-in-out 0.3s;
    }

    .new-timeline-date span::after {
        background-color: #2b0083 !important;
    }

    .commentHistory p {
        background-color: #2b0083 !important;
    }

    /* .business-left-bottom {
        height: 40em !important;
        overflow-y: auto;
        -ms-overflow-style: none;
     
        scrollbar-width: none;
    
    } */

    .business-left-wrapper {
        height: 0 !important;
    }

    .proposal-actions {
        padding: 6px 0 20px;
        display: flex !important;
        align-items: center;
    }

    .proposal-action-button {
        display: inline-flex;
        align-items: center;
        background-color: white;
        margin-right: 1em;
        padding: 0.8em 1.5em !important;
        border-radius: 100px !important;
        cursor: pointer;
    }

    .proposal-action-button span {
        margin-right: .5em;
    }

    .generate-proposal {
        background-color: #b300c6;
        color: white;
    }

    .view-proposal {
        background-color: #b300c6;
        color: white;
    }

    .send-on-email {
        background-color: #b300c6;
        color: white;
    }

    /* Business Details */
    .business-website-link {
        display: inline-flex;
        align-items: center;
        text-decoration: underline !important;
        color: blue !important;
    }

    .business-website-link span {
        margin-left: 0.2em;
        margin-top: 0.1em;
    }

    /* data Tables */
    .contacts-data-table th,
    .invoice-data-table th {
        background-color: #a143f6;
        color: white;
    }

    /* Proposals Actions */
    .all-generated-proposals-head {
        padding: 0 1.5em;
    }

    .busines-left-top .l-top-header {
        background: #a143f6;
        padding: 11px;
        color: #fff;
        border-radius: 10px 10px 0 0;
        align-items: center;
    }

    .busines-left-top {
        padding: 0;
    }

    .l-top-header>div a {
        color: #fff !important;
        font-weight: 600;
    }

    .l-top-header.l-bottom-header {
        background: #fff;
        border-radius: 0 0 10px 10px;
    }

    .c-bg {
        background: #961EFF;
    }

    .c-bg h2 {
        color: #fff;
    }

    .canvas-button {
        border: 1px solid #A143F6;
        padding: 5px 14px;
        border-radius: 5px;
        font-weight: 700;
    }
    .card-contentss.card-contentss-new{
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            background: #fff;
            margin: 0 9px;
            border-radius: 10px;
            padding: 12px 0 0;
        }
        .business-right-box {
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            border-radius: 10px 10px 0 0;
            background: #a143f61f;
      }
</style>

<body x-data="main"
    class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased collapsible-vertical full ltr"
    :class="[$store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme === 'dark' || $store.app.isDarkMode ? 'dark' :
        '', $store.app.menu, $store.app.layout, $store.app.rtlClass
    ]">
    <!-- sidebar menu overlay -->
    <div x-cloak class="fixed inset-0 z-50 bg-[black]/60 lg:hidden" :class="{ 'hidden': !$store.app.sidebar }"
        @click="$store.app.toggleSidebar()"></div>

    <!-- screen loader -->
    <div
        class="screen_loader animate__animated fixed inset-0 z-[60] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
        <svg width="64" height="64" viewBox="0 0 135 135" xmlns="http://www.w3.org/2000/svg" fill="#4361ee">
            <path
                d="M67.447 58c5.523 0 10-4.477 10-10s-4.477-10-10-10-10 4.477-10 10 4.477 10 10 10zm9.448 9.447c0 5.523 4.477 10 10 10 5.522 0 10-4.477 10-10s-4.478-10-10-10c-5.523 0-10 4.477-10 10zm-9.448 9.448c-5.523 0-10 4.477-10 10 0 5.522 4.477 10 10 10s10-4.478 10-10c0-5.523-4.477-10-10-10zM58 67.447c0-5.523-4.477-10-10-10s-10 4.477-10 10 4.477 10 10 10 10-4.477 10-10z">
                <animateTransform attributeName="transform" type="rotate" from="0 67 67" to="-360 67 67" dur="2.5s"
                    repeatCount="indefinite" />
            </path>
            <path
                d="M28.19 40.31c6.627 0 12-5.374 12-12 0-6.628-5.373-12-12-12-6.628 0-12 5.372-12 12 0 6.626 5.372 12 12 12zm30.72-19.825c4.686 4.687 12.284 4.687 16.97 0 4.686-4.686 4.686-12.284 0-16.97-4.686-4.687-12.284-4.687-16.97 0-4.687 4.686-4.687 12.284 0 16.97zm35.74 7.705c0 6.627 5.37 12 12 12 6.626 0 12-5.373 12-12 0-6.628-5.374-12-12-12-6.63 0-12 5.372-12 12zm19.822 30.72c-4.686 4.686-4.686 12.284 0 16.97 4.687 4.686 12.285 4.686 16.97 0 4.687-4.686 4.687-12.284 0-16.97-4.685-4.687-12.283-4.687-16.97 0zm-7.704 35.74c-6.627 0-12 5.37-12 12 0 6.626 5.373 12 12 12s12-5.374 12-12c0-6.63-5.373-12-12-12zm-30.72 19.822c-4.686-4.686-12.284-4.686-16.97 0-4.686 4.687-4.686 12.285 0 16.97 4.686 4.687 12.284 4.687 16.97 0 4.687-4.685 4.687-12.283 0-16.97zm-35.74-7.704c0-6.627-5.372-12-12-12-6.626 0-12 5.373-12 12s5.374 12 12 12c6.628 0 12-5.373 12-12zm-19.823-30.72c4.687-4.686 4.687-12.284 0-16.97-4.686-4.686-12.284-4.686-16.97 0-4.687 4.686-4.687 12.284 0 16.97 4.686 4.687 12.284 4.687 16.97 0z">
                <animateTransform attributeName="transform" type="rotate" from="0 67 67" to="360 67 67" dur="8s"
                    repeatCount="indefinite" />
            </path>
        </svg>
    </div>

    <!-- scroll to top button -->
    <div class="fixed bottom-6 z-50 ltr:right-6 rtl:left-6" x-data="scrollToTop">
        <template x-if="showTopButton">
            <button type="button"
                class="btn btn-outline-primary animate-pulse rounded-full bg-[#fafafa] p-2 dark:bg-[#060818] dark:hover:bg-primary"
                @click="goToTop">
                <svg width="24" height="24" class="h-4 w-4" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd"
                        d="M12 20.75C12.4142 20.75 12.75 20.4142 12.75 20L12.75 10.75L11.25 10.75L11.25 20C11.25 20.4142 11.5858 20.75 12 20.75Z"
                        fill="currentColor" />
                    <path
                        d="M6.00002 10.75C5.69667 10.75 5.4232 10.5673 5.30711 10.287C5.19103 10.0068 5.25519 9.68417 5.46969 9.46967L11.4697 3.46967C11.6103 3.32902 11.8011 3.25 12 3.25C12.1989 3.25 12.3897 3.32902 12.5304 3.46967L18.5304 9.46967C18.7449 9.68417 18.809 10.0068 18.6929 10.287C18.5768 10.5673 18.3034 10.75 18 10.75L6.00002 10.75Z"
                        fill="currentColor" />
                </svg>
            </button>
        </template>
    </div>



    <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
        <!-- start sidebar section -->
        @include('component/sidebar')
        <!-- end sidebar section -->

        <div class="main-content flex min-h-screen flex-col">
            <!-- start header section -->
            @include('component/header')
            <!-- end header section -->

            <div class="dvanimation animate__animated p-6 " :class="[$store.app.animation]">
                <!-- start main content section -->
                <div class="back-arrow">
                    <a href="javascript:void(0);" onclick="history.back();">
                        <span><i class="fa-solid fa-arrow-left"></i></span>
                    </a>
                    <div class="main-heading--00 d-none">Deal Details</div>
                    <span style="background: none !important;">
                        <a href="#" style="rotate: 180deg; margin-right: -14px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24">
                                <path fill="#2b0083" d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6z" />
                            </svg>
                        </a>
                        <a href="#" style="margin-left: -5px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24">
                                <path fill="#2b0083" d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6z" />
                            </svg>
                        </a>
                    </span>
                </div>

                <div x-data="sales">
                    <div class="box-card">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="business-left-wrapper">
                                    <div
                                        class="busines-left-top 
                                            @if ($deals->priority == 'Low') low-priority 
                                            @elseif($deals->priority == 'Medium') 
                                                medium-priority 
                                            @elseif($deals->priority == 'High') 
                                                high-priority @endif">

                                        <div class="l-top-header">
                                            <div><a href=""> {{ $deals->id }}</a></div>
                                            <div class="deal_stage">
                                                <h6 class="b-l-title6">
                                                    <!-- Deal Stage: -->
                                                    @if ($deals->deal_stage == 'newdealcreated')
                                                        New Deal Created
                                                    @elseif($deals->deal_stage == 'needtosendproposal' || $deals->deal_stage == 'needtosentproposal')
                                                        Need To Send Proposal
                                                    @elseif($deals->deal_stage == 'proposalsent')
                                                        Proposal Sent
                                                    @elseif($deals->deal_stage == 'negotiation')
                                                        Negotiation
                                                    @elseif($deals->deal_stage == 'needtosentcontract' || $deals->deal_stage == 'needtosendcontract')
                                                        Need To Send Contract
                                                    @elseif($deals->deal_stage == 'contractsent')
                                                        Contract Sent
                                                    @elseif($deals->deal_stage == 'closedwon')
                                                        Closed Won 
                                                    @elseif($deals->deal_stage == 'readytoclose')
                                                        Ready To Close
                                                    @elseif($deals->deal_stage == 'closedlost')
                                                        Closed Lost
                                                    @endif
 
                                                </h6>
                                            </div>


                                        </div>
                                        <div class="business-name">
                                            <h2>{{ $deals->deal_name }}</h2>

                                        </div>
                                        <div class="business-icon-wrap">
                                            <ul>
                                                <li>
                                                    <a href="" style="background-color: #961EFF; color: white;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                                            height="1.5em" viewBox="0 0 24 24">
                                                            <path fill="white"
                                                                d="M3 21v-4.25L16.2 3.575q.3-.275.663-.425t.762-.15t.775.15t.65.45L20.425 5q.3.275.438.65T21 6.4q0 .4-.137.763t-.438.662L7.25 21zM17.6 7.8L19 6.4L17.6 5l-1.4 1.4z" />
                                                        </svg>
                                                    </a>
                                                    <span>Note</span>
                                                </li>

                                                <li>
                                                    <a href=""
                                                        style="background-color: #961EFF; color: white;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em"
                                                            height="1.2em" viewBox="0 0 15 15">
                                                            <path fill="white"
                                                                d="M.948 1.108A.744.744 0 0 0 0 1.823v9.354c0 .494.473.85.948.715A24 24 0 0 1 7 10.98V13H2v1h11v-1H8v-2.02c2.039.042 4.073.346 6.052.912a.744.744 0 0 0 .948-.715V1.823a.744.744 0 0 0-.948-.715a23.85 23.85 0 0 1-13.104 0" />
                                                        </svg>
                                                    </a>
                                                    <span>Task</span>
                                                </li>
                                                <li>
                                                    <a href=""
                                                        style="background-color: #961EFF; color: white;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                                            height="1.5em" viewBox="0 0 24 24">
                                                            <path fill="white"
                                                                d="M16.48 10.41c-.39.39-1.04.39-1.43 0l-4.47-4.46l-7.05 7.04l-.66-.63a3 3 0 0 1 0-4.24l4.24-4.24a3 3 0 0 1 4.24 0L16.48 9c.39.39.39 1.02 0 1.41m.7-2.12c.78.78.78 2.05 0 2.83c-1.27 1.27-2.61.22-2.83 0l-3.76-3.76l-5.57 5.57a.996.996 0 0 0 0 1.41c.39.39 1.02.39 1.42 0l4.62-4.62l.71.71l-4.62 4.62a.996.996 0 0 0 0 1.41c.39.39 1.02.39 1.42 0l4.62-4.62l.71.71l-4.62 4.62a.996.996 0 1 0 1.41 1.41l4.62-4.62l.71.71l-4.62 4.62a.996.996 0 1 0 1.41 1.41l8.32-8.34a3 3 0 0 0 0-4.24l-4.24-4.24a3 3 0 0 0-4.18-.06z" />
                                                        </svg>
                                                    </a>
                                                    <span>Task</span>
                                                </li>
                                                <li>
                                                    <a href=""
                                                        style="background-color: #961EFF; color: white;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                                            height="1.5em" viewBox="0 0 24 24">
                                                            <path fill="white"
                                                                d="M5 10c-1.1 0-2 .9-2 2s.9 2 2 2s2-.9 2-2s-.9-2-2-2m14 0c-1.1 0-2 .9-2 2s.9 2 2 2s2-.9 2-2s-.9-2-2-2m-7 0c-1.1 0-2 .9-2 2s.9 2 2 2s2-.9 2-2s-.9-2-2-2" />
                                                        </svg>
                                                    </a>
                                                    <span>More</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="l-top-header l-bottom-header">
                                            <div
                                                style="background-color: {{ $deals->priority == 'Medium' ? 'orange' : 'red' }}; padding: 0.4em 1em; border-radius: 1em;font-size:14px">
                                                {{ $deals->priority }}
                                            </div>

                                            <div style="font-size: 14px; font-weight: 600;"><span
                                                    style="color: #961EFF;">Created By :</span> <a href=""
                                                    style="color: #000 !important;">
                                                    {{ $deals->created_by }}</a></div>
                                        </div>
                                    </div>
                                    <style>
                                        .header-wrap {
                                            position: sticky;
                                            top: 0;
                                            background: #fff;
                                        }

                                        .business-left-details {
                                            height: 450px !important;
                                            overflow-y: auto;
                                            padding: 10px 15px;
                                        }

                                        .header-name>div {
                                            font-size: 20px;
                                        }
                                        .edit-text {
                                            border: 1px solid #fff;
                                            color: #fff !important;
                                            padding: 5px 14px;
                                            border-radius: 5px;
                                            font-weight: 700;
                                            transition: all .2s;
                                        }
                                        .edit-text:hover {
                                            background: #fff;
                                            color: #000 !important;
                                        }
                                     .business-left-wrapper .header-wrap {
                                        background: #a143f6;
                                    }
                                    #openBusinessToggle{
                                        display: none;
                                    }
                                    </style>
                                    <div class="business-left-bottom">
                                        <div class="header-wrap">
                                            <div class="header-name  w-75" id="businessToggle" style="justify-content: space-between;cursor:pointer">
                                                 <h5 style="margin: 0;color: #fff;">Deal Details</h5>
                                            </div>
                                            <div>
                                                <a href="#editDetails" class="edit-text" id="dealFormButton" data-bs-toggle="offcanvas" data-bs-target="#editDetails" aria-controls="editDetails">Edit <i class="fa-regular fa-edit" aria-hidden="true"></i></a>
                                            </div>
                                        </div>

                                        <div class="business-left-detailss" id="openBusinessToggle">
                                            <div class="business-left-details">
                                                <ul>

                                                    <div>
                                                        <div class="detail-point-heads">Deal Created Date:</div>
                                                        <div class="detail--point---v">
                                                            {{ \Carbon\Carbon::parse($deals->created_date_time)->format('F j, Y \a\t g:i A') }}
                                                        </div>

                                                        <div class="detail-point-heads">Deal Type :</div>
                                                        <div class="detail--point---v">{{ $deals->deal_type }}</div>

                                                        <div class="detail-point-heads">Service :</div>
                                                        <div class="detail--point---v">{{ $deals->Service }}</div>

                                                        <div class="detail-point-heads">Amount :</div>
                                                        <div class="detail--point---v">{{ $deals->amount }}</div>

                                                        <div class="detail-point-heads">VAT Amount :</div>
                                                        <div class="detail--point---v">{{ $deals->vat_amount }}</div>

                                                        <div class="detail-point-heads">Deal Amount :</div>
                                                        <div class="detail--point---v">{{ $deals->deal_amount }}</div>

                                                        <div class="detail-point-heads">Deal Probability :</div>
                                                        <div class="detail--point---v"
                                                            style="margin-bottom: 4px !important;">
                                                            {{ $deals->deal_probability ? $deals->deal_probability : '0%' }}
                                                        </div>
                                                        <div
                                                            style="margin-bottom: 1em; width: 100%; height: 12px !important; border-radius: 10px; overflow: hidden; background-color: #F6ECFF;">
                                                            <div
                                                                style="width: {{ $deals->deal_probability ? $deals->deal_probability : '0%' }}; height: 100%; background-color: #961EFF; border-radius: 10px;">
                                                            </div>
                                                        </div>

                                                        <div class="detail-point-heads">Estimated Closed Date :</div>
                                                        <div class="detail--point---v">
                                                            {{ \Carbon\Carbon::parse($deals->closed_date)->format('F j, Y') }}
                                                        </div>

                                                        <div class="detail-point-heads">Contract Signed Date:</div>
                                                        <div class="detail--point---v">
                                                            {{ $deals->contract_signed_date ? \Carbon\Carbon::parse($deals->contract_signed_date)->format('F j, Y') : '00/00/0000' }}
                                                        </div>

                                                    </div>



                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                {{-- <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-content">
                                            <ul>
                                                <div>
                                                    <h6 class="b-l-title6"> Created Date</h6>
                                                    <li>
                                                        <span>15/04/2024 , 02:30 PM</span>
                                                    </li>
                                                </div>
                                                <div>
                                                    <h6 class="b-l-title6"> Created By</h6>
                                                    <li>
                                                        <span>Contact Deal</span>
                                                    </li>
                                                </div>
                                                <div>
                                                    <h6 class="b-l-title6"> Lead Source</h6>
                                                    <li>
                                                        <span>Auto Dialer</span>
                                                    </li>
                                                </div>
                                                <div>
                                                    <h6 class="b-l-title6"> Lead Agent</h6>
                                                    <li>
                                                        <span>Sunny</span>
                                                    </li>
                                                </div>
                                                <div>
                                                    <h6 class="b-l-title6"> Lead Creation Date</h6>
                                                    <li>
                                                        <span>13th April 2024</span>
                                                    </li>
                                                </div>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card-content">
                                                    <div class="revenue-content">
                                                        <h6>Total Revenue</h6>
                                                        <h2>£ 3,500</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="card-content">
                                                    <div class="revenue-content">
                                                        <h6>Total Projects</h6>
                                                        <h2>4</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="row">
                                    <div class="activities-div">
                                        <div>
                                            <span>Next Activity:</span>
                                            <span> {{ $deals->next_activity }}</span>
                                        </div>

                                        <div>
                                            <span>Next Activity Date:</span>
                                            <span>
                                                {{ \Carbon\Carbon::parse($deals->next_activity_date)->format('F j, Y') }}</span>
                                        </div>

                                        <div>
                                            <span>Next Activity Time:</span>
                                            <span>{{ \Carbon\Carbon::parse($deals->next_activity_time)->format('g:i A') }}</span>
                                        </div>


                                    </div>

                                    <div class="col-md-12">
                                        <div class="tab-header tab-header2  tabs-nav2">
                                            <ul>
                                                <li class="active deal-histor-tab"><a href="#history">History</a></li>
                                                {{-- <li><a href="#qa_audit">QA Audit Report</a></li> --}}
                                            </ul>
                                        </div>
                                        <div class="card-content tabs-content2">

                                            <div id="history" class="hides">
                                                <div class="timeline-container">
                                                    <?php
                                                    $groupedComments = [];
                                                    foreach ($specific_deal_comments as $comment) {
                                                        $date = date('d-F-Y', strtotime($comment->created_date_time));
                                                        $groupedComments[$date][] = $comment;
                                                    }
                                                    ?>
                                                    @foreach ($groupedComments as $date => $comments)
                                                        <div class="timeline-end date-views commentHistory">
                                                            <p class="timeline-end-date timeAndDate">
                                                                {{ $date }}</p>
                                                        </div>
                                                        <div id="comments-{{ $date }}"
                                                            class="comments-container commentContainer">
                                                            @foreach ($comments as $comment)
                                                                <div class="business-timeline">
                                                                    <div class="timeline-box new-timline-box">
                                                                        <div class="timeline-date new-timeline-date">
                                                                            <span>{{ date('h:i A', strtotime($comment->created_date_time)) }}</span>
                                                                        </div>
                                                                        <div class="timeline-content">
                                                                            <p>
                                                                                <span>{{ $comment->comment }}
                                                                                    <small
                                                                                        class="text-dark">({{ $comment->deal_stage }})</small>
                                                                                </span>
                                                                                <br>
                                                                                <small
                                                                                    style="color: #961EFF !important;">{{ $comment->created_by }},
                                                                                    {{ date('d-F-Y', strtotime($comment->created_date_time)) }}</small>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <script>
                                                Array.from(document.getElementsByClassName('timeAndDate')).forEach((timeAndDate) => {
                                                    timeAndDate.addEventListener('click', (e) => {
                                                        timeAndDate.parentElement.nextElementSibling.classList.toggle('show');
                                                    });
                                                });
                                            </script>
                                            <div id="qa_audit" class="hides">
                                                <div class="qa-header">
                                                    <ul>
                                                        <li>Audit Result: <span>Qualified</span></li>
                                                        <li>QA Status: <span>Approved</span></li>
                                                    </ul>
                                                </div>
                                                <div class="qa-content">
                                                    <ul>
                                                        <li><span><i class="fa-solid fa-check"></i></span> Did the
                                                            Agent Introduce Himself/Herself And Fast Ranking</li>
                                                        <li><span><i class="fa-solid fa-check"></i></span> Did the
                                                            Agent Explain the Purpose of the Call?</li>
                                                        <li><span><i class="fa-solid fa-check"></i></span> Did The
                                                            Agent Confirm Business Name (Phonetically if Required) ?
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="business-middle-wrapper">
                                    <!-- Start -->
                                    <div class="business-data-card">
                                        <div class="data-title">
                                            <h4>Contacts</h4>
                                            <div> <a href="#" id="showForm" data-bs-toggle="offcanvas"
                                                    class="canvas-button" data-bs-target="#addNew"
                                                    aria-controls="addNew"> Add New <i
                                                        class="fa-solid fa-plus"></i></a>
                                            </div>
                                        </div>

                                        <div class="card-contents">
                                            <table class="table contacts-data-table">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>Mobile</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($linked_data as $contact)
                                                        <tr>
                                                            <td>{{ $contact['first_name'] }}
                                                                {{ $contact['last_name'] }}
                                                                ({{ $contact['designation'] }})
                                                            </td>

                                                            <td>{{ $contact['email'] }}</td>
                                                            <td>{{ $contact['phone'] }}</td>
                                                            <td>{{ $contact['mobile'] }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- End -->

                                    <!-- Start -->
                                    <div class="business-data-card">
                                        <div class="data-title">
                                            <h4>Invoice</h4>
                                            <div><a href="#" id="dealFormButton" data-bs-toggle="offcanvas"
                                                    data-bs-target="#addInvoice" aria-controls="addInvoice"
                                                    class="canvas-button">Add
                                                    Invoice <i class="fa-solid fa-plus"></i></a></div>
                                        </div>

                                        <div class="card-contents">
                                            <table class="table invoice-data-table">
                                                <thead>
                                                    <tr>
                                                        <th>Invoice Number</th>
                                                        <th>Amount</th>
                                                        <th>Due Date</th>
                                                        <th>Priority</th>
                                                        <th>Comment</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- End -->
                                </div>
                            </div>
                            <style>
                                
                                .right-box-header {
                                    font-size: 16px !important;
                                    font-weight: 700;
                                    border-bottom: 1px solid #eee;
                                    padding: 10px;
                                    color: #fff;
                                    background: #a143f6;
                                    border-radius: 10px 10px 0 0;
                                }
                                .right-card-name {
                                    margin-bottom: 10px;
                                    padding: 6px 15px;
                                }
                                .r-b {
                                    padding: 10px 0;
                                }
                            </style>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="business-right-wrapper">
                                            <div class="business-right-box">

                                                {{-- <div class="right-box-header">
                                                    <div>Link Businesses </div>
                                                    <div>
                                                        <a
                                                            href="{{ route('business', ['business_id' => $linked_business->business_id]) }}">
                                                {{ $linked_business['business_name'] }} </a>
                                            </div>
                                        </div> --}}

                                                <div>

                                                    <div class="card-contents card-contentss-new">
                                                        <div class="right-box-header"> Linked Businesses </div>
                                                        <div class="right-card-name">
                                                            <h3 class="mb-2">
                                                                <a style="color: #000 !important;"
                                                                    class="part--details---0"
                                                                    href="{{ route('business', ['business_id' => $linked_business->business_id]) }}">
                                                                    {{ $linked_business['business_name'] }} </a>
                                                            </h3>

                                                            <div class="d-flex justify-content-between r-b">
                                                                 <span>
                                                                    <a class="business-website-link"
                                                                        href="https://{{ $linked_business['website'] }}"
                                                                        target="_bla">
                                                                        {{ $linked_business['website'] }}
                                                                    </a> </span>
                                                            </div>
                                                            <div class="d-flex justify-content-between r-b">
                                                                 <span>{{ $linked_business['phone'] }} </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div class="right-box-header"> Linked Contact <span>({{ count($linked_data) }})</span>
                                                    </div>
                                                    @foreach ($linked_data as $contact)
                                                        <div class="card-contents">
                                                            <div class="right-card-name">
                                                                <h3 class="mb-2">
                                                                    <a class="part--details---0"
                                                                        style="color: #000 !important;"
                                                                        href="{{ route('contact', ['auth_Person_id' => $contact->authorized_person_id]) }}">
                                                                        {{ $contact['first_name'] }}
                                                                        {{ $contact['last_name'] }}
                                                                        ({{ $contact['designation'] }})
                                                                    </a>
                                                                </h3>
                                                                <div>
                                                                    <span> </span>
                                                                    <p>{{ $contact['email'] }}</p>
                                                                    <p>{{ $contact['phone'] }}</p>
                                                                    <p>{{ $contact['mobile'] }}</p>
                                                                    <p>{{ $contact['alternate_phone'] }}</p>
                                                                    <p>{{ $contact['secondary_phone'] }}</p>
                                                                    <p>{{ $contact['gender'] }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Invoice -->
                                    <div class="col-md-12 mt-2">
                                        <div class="business-right-wrapper">
                                            <div class="business-right-box">
                                                <div class="right-box-header">
                                                    <div>Invoice <span></span></div>
                                                    <div><a href="#" id="dealFormButton"
                                                            data-bs-toggle="offcanvas" data-bs-target="#addInvoice"
                                                            aria-controls="addInvoice" class="edit-text"
                                                            style="font-size: 16px;">Add <i
                                                                class="fa-solid fa-plus"></i> </a></div>
                                                </div>
                                                <div class="card-contentss card-contentss-new" style="padding: 10px 0 0;">
                                                    <div class="right-card-name">
                                                        <h3 style="color: #000;" class="mb-1">24665533</h3>
                                                        <span style="font-size: 18px; font-weight: 700;">24665533</span>
                                                        <div>
                                                             <span style="font-size: 18px; font-weight: 700;">£ 999</span>
                                                            <p>Due Date: <span style="color: #961EFF;">5th May
                                                                    2024</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Invoice -->
                                </div>
                                <!-- Here is your dynamic values -->
                                <div class="business-right-wrapper d-none">
                                    <!-- Start -->
                                    <div class="accordionItem business-right-card">
                                        <div class="card-item">
                                            <div class="business-right-title">
                                                <h5 id="contactAccordion"><span><i
                                                            class="fa-solid fa-angle-right"></i>
                                                    </span>Contact </h5>
                                            </div>
                                            <div class="business-right-contact comman-accordion-content"
                                                id="contactsDetails">
                                                <div class="contact-button-wrap">
                                                    <a href="#" id="showContacts" data-bs-toggle="offcanvas"
                                                        data-bs-target="#addExisting" aria-controls="addExisting">Add
                                                        Existing</a>
                                                    <a href="#" id="showForm" data-bs-toggle="offcanvas"
                                                        data-bs-target="#addNew" aria-controls="addNew"> Add New +</a>
                                                </div>
                                                <div class="business-contact-list">

                                                    <ul>
                                                        <li>adfsdg</span></li>
                                                        <li>Email: sfdsg@gmail.com</span></li>
                                                        <li>Phone: 78897897867567</span></li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End -->
                                    <!-- Start -->
                                    <div class="accordionItem business-right-card">
                                        <div class="card-item">
                                            <div class="business-right-title">
                                                <h5 id="dealAccordion" class="accordion-header"><span><i
                                                            class="fa-solid fa-angle-right"></i> </span> Deals </h5>
                                            </div>
                                            <div class="business-right-contact comman-accordion-content"
                                                id="dealDetails">
                                                <div class="contact-button-wrap">
                                                    <a href="#" id="dealFormButton" data-bs-toggle="offcanvas"
                                                        data-bs-target="#addNewDeal" aria-controls="addNewDeal">+ ADD
                                                        NEW DEAL</a>
                                                </div>
                                                <div class="business-contact-list">
                                                    <ul>
                                                        <li>First</li>
                                                        <li>Email: <span>test@gmail.com</span></li>
                                                        <li>Phone: <span>+11123243432</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End -->
                                </div>
                                <!-- End -->
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end main content section -->
            </div>

            {{-- Add New OffCanvas --}}
            <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="addNew"
                aria-labelledby="offcanvasWithBothOptionsLabel" style="width: 70%;">
                <div class="offcanvas-header" style="background: #a143f6;">
                    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel" style="color:#fff;">Add New
                        Contact</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div>
                        <form action="{{ route('submit-contact-integrate-with-deal', ['deal_id' => $deals->id]) }}"
                            method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="business_id">Title:</label>
                                        <input class="form-control" id="title" name="title">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="business_id">First Name:</label>
                                        <input class="form-control" id="first_name" name="first_name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="business_id">Middle Name:</label>
                                        <input class="form-control" id="mid_name" name="mid_name">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="business_id">Last Name::</label>
                                        <input class="form-control" id="last_name" name="last_name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="business_id">Date of Birth:</label>
                                        <input class="form-control" id="dob" name="dob">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="business_id">Gender:</label>
                                        <select id="gender" class="form-control" name="gender">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="business_id">Email:</label>
                                        <input class="form-control" id="email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="business_id">Phone:</label>
                                        <input class="form-control" id="phone" name="phone">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="business_id">Mobile:</label>
                                        <input class="form-control" id="mobile" name="mobile">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="business_id">Alternate Phone:</label>
                                        <input class="form-control" id="alternate_phone" name="alternate_phone">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="business_id">Designation:</label>
                                        <input class="form-control" id="designation" name="designation">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="business_id">Secondary Email:</label>
                                        <input class="form-control" id="secondary_email" name="secondary_email">
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="business_id">Secondary Phone:</label>
                                        <input class="form-control" id="secondary_phone" name="secondary_phone">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="business_id">Property Number:</label>
                                        <input class="form-control" id="property_no" name="property_no">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="business_id">Street Name:</label>
                                        <input class="form-control" id="street_name" name="street_name">
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="business_id">City:</label>
                                        <input class="form-control" id="city" name="city">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="business_id">Postal Code:</label>
                                        <input class="form-control" id="postal_code" name="postal_code">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="business_id">Country:</label>
                                        <input class="form-control" id="country" name="country">
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- End --}}

            {{-- Edit Details --}}
            <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="editDetails"
                aria-labelledby="offcanvasExampleLabel" style="width: 50%;">
                <div class="offcanvas-header" style="background: #a143f6;">
                    <div class="data-title">
                        <h4 style="margin:0;color:#fff"> Edit Deal Details</h4>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="business-data-card">

                        <div class="card-content">
                            <div class="row">


                                <form action="{{ route('update-deal') }}" method="POST">

                                    {{-- <input type="text" name="deal_id" value="{{ $deals->id }}" readonly> --}}

                                    @csrf <!-- CSRF token for Laravel -->
                                    <div class="row">
                                        <!-- Business ID (Hidden Input) -->
                                        <input type="text" id="business_id" name="business_id"
                                            value="{{ $deals->business_id }}" hidden>

                                        <!-- Business Name (Hidden Input) -->
                                        <input type="text" id="business_name" name="business_name"
                                            value="{{ $deals->business_name }}" hidden>

                                        <!-- Deal Name -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="deal_name">Deal Name:</label>
                                                <input type="text" id="deal_name" name="deal_name"
                                                    class="form-control" value="{{ $deals->deal_name }}" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="deal_id">Deal Id:</label>
                                                <input type="text" id="deal_id" name="deal_id"
                                                    class="form-control" value="{{ $deals->id }}" readonly>
                                            </div>
                                        </div>


                                        <div class="col-md-6 mt-3">
                                            <div class="form-group">
                                                <label for="closed_date">Estimated Closed Date:</label>
                                                <input type="date" id="closed_date" name="closed_date"
                                                    class="form-control" value="{{ $deals->closed_date }}" required>
                                            </div>
                                        </div>


                                        <div class="row mt-3">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="selected_service">Select Service:</label>
                                                    <select class="form-control" id="selected_service"
                                                        name="selected_service" required>
                                                        <option value="">Select Service</option>
                                                        @foreach ($services as $service)
                                                            <option value="{{ $service->service_name }}"
                                                                data-amount="{{ $service->charge }}"
                                                                {{ $deals->Service == $service->service_name ? 'selected' : '' }}>
                                                                {{ $service->service_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                        </div>



                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="payable_amount">Deal Amount Exc VAT :</label>
                                                    <input type="text" id="payable_amount" name="amount"
                                                        class="form-control" value="{{ $deals->amount }}">
                                                </div>
                                            </div>

                                            <input type="hidden" id="vat" name="vat" value="20"
                                                class="form-control" readonly>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="vat_amount">VAT :</label>
                                                    <input type="text" id="vat_amount" name="vat_amount"
                                                        class="form-control" value="{{ $deals->vat_amount }}"
                                                        readonly>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mt-3">
                                                <div class="form-group">
                                                    <label for="total_payable_amount">Deal Amount Inc. VAT :</label>
                                                    <input type="text" id="total_payable_amount"
                                                        name="deal_amount" class="form-control"
                                                        value="{{ $deals->deal_amount }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <div class="form-group">
                                                    <label for="next_activity">Next Activity:</label>
                                                    <select id="next_activity" name="next_activity"
                                                        class="form-control" required>
                                                        <option value="" disabled>Select Next Activity</option>
                                                        <option value="Callback"
                                                            {{ $deals->next_activity == 'Callback' ? 'selected' : '' }}>
                                                            Callback</option>
                                                        <option value="Email"
                                                            {{ $deals->next_activity == 'Email' ? 'selected' : '' }}>
                                                            Email
                                                        </option>
                                                        <option value="Meeting"
                                                            {{ $deals->next_activity == 'Meeting' ? 'selected' : '' }}>
                                                            Meeting</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3">

                                            <div class="col-md-6 next-activity-date-time">
                                                <div class="form-group">
                                                    <label for="next_activity_date">Next Activity Date:</label>
                                                    <input type="date" id="next_activity_date"
                                                        name="next_activity_date" class="form-control"
                                                        value="{{ $deals->next_activity_date }}">
                                                </div>
                                            </div>

                                            <div class="col-md-6 next-activity-date-time">
                                                <div class="form-group">
                                                    <label for="next_activity_time">Next Activity Time:</label>
                                                    <input type="time" id="next_activity_time"
                                                        name="next_activity_time" class="form-control"
                                                        value="{{ $deals->next_activity_time }}">
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Deal Type -->
                                        <div class="col-md-6 mt-3">
                                            <div class="form-group">
                                                <label for="deal_type">Deal Type:</label>
                                                <select id="deal_type" name="deal_type" class="form-control"
                                                    required>
                                                    <option value="" disabled selected>Select Deal Type</option>
                                                    <option value="One-Off"
                                                        {{ $deals->deal_type == 'One-Off' ? 'selected' : '' }}>One-Off
                                                    </option>
                                                    <option value="Recurring"
                                                        {{ $deals->deal_type == 'Recurring' ? 'selected' : '' }}>
                                                        Recurring</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mt-3" id="recurring-count-div" style="display: none;">
                                            <div class="form-group">
                                                <label for="recurring_count">Recurring Count:</label>
                                                <input type="number" id="recurring_count"
                                                    name="recurring_count" class="form-control"
                                                    value="{{ $deals->recurring_count }}">
                                            </div>
                                        </div>


                                        <div class="col-md-6 mt-3" id="recurring-type-div" style="display: none;">
                                            <div class="form-group">
                                                <label for="recurring_type">Recurring Type:</label>
                                                <select id="recurring_type" name="recurring_type"
                                                    class="form-control">
                                                    <option value="" disabled selected>Select Recurring Type
                                                    </option>
                                                    <option value="monthly"
                                                        {{ $deals->recurring_type == 'monthly' ? 'selected' : '' }}>
                                                        Monthly</option>
                                                    <option value="weekly"
                                                        {{ $deals->recurring_type == 'weekly' ? 'selected' : '' }}>
                                                        Weekly</option>
                                                    <option value="quarterly"
                                                        {{ $deals->recurring_type == 'quarterly' ? 'selected' : '' }}>
                                                        Quarterly</option>
                                                    <option value="halfyearly"
                                                        {{ $deals->recurring_type == 'halfyearly' ? 'selected' : '' }}>
                                                        Half Yearly</option>
                                                    <option value="annually"
                                                        {{ $deals->recurring_type == 'annually' ? 'selected' : '' }}>
                                                        Annually</option>
                                                </select>
                                            </div>
                                        </div>

                                        




                                        <!-- Priority -->
                                        <div class="col-md-6 mt-3">
                                            <div class="form-group">
                                                <label for="priority">Priority:</label>
                                                <select id="priority" name="priority" class="form-control" required>
                                                    <option value="" disabled selected>Select Priority</option>
                                                    <option value="Low"
                                                        {{ $deals->priority == 'Low' ? 'selected' : '' }}>Low</option>
                                                    <option value="Medium"
                                                        {{ $deals->priority == 'Medium' ? 'selected' : '' }}>Medium
                                                    </option>
                                                    <option value="High"
                                                        {{ $deals->priority == 'High' ? 'selected' : '' }}>High
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <span class="mt-4 mb-3" style="font-size: 20px; font-weight: 600;"> Current
                                            Deal Stage : {{ $deals->deal_stage }} </span>

                                        <div class="col-md-6 deal_stage">
                                            <div class="form-group">
                                                <label for="deal_stage">Deal Stage:</label>
                                                <select id="deal_stage" name="deal_stage" class="form-control"
                                                    required>
                                                    <option value="">Select Deal Stage</option>
                                                    <option value="newdealcreated">New Deal Created </option>
                                                    <option value="needtosentproposal">Need to Send Proposal (0%)
                                                    </option>
                                                    <option value="proposalsent">Proposal Sent (30%)</option>
                                                    <option value="negotiation">Negotiation (50%)</option>
                                                    <option value="readytoclose">Ready to Close (70%)</option>
                                                    <option value="needtosentcontract">Need to Send Contract (80%)
                                                    </option>
                                                    <option value="contractsent">Contract Sent (90%)</option>
                                                    <option value="closedwon">Closed Won (100%)</option>
                                                    <option value="closedlost">Closed Lost (0%)</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-md-6 contract_number" id="contract_number_div" style="display: none">
                                            <div class="form-group">
                                                <label for="contract_number">Contract Number:</label>
                                                <input type="text" id="contract_number" name="contract_number" class="form-control"
                                                       value="{{ $deals->contract_number }}">
                                            </div>
                                        </div>
                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                let dealStage = document.getElementById('deal_stage');
                                                let contractNumberDiv = document.getElementById('contract_number_div');
                                                let contractNumberInput = document.getElementById('contract_number');

                                               
                                        
                                                // Function to toggle the Contract Number field visibility and required attribute
                                                function toggleContractNumber() {
                                                    if (dealStage.value === 'closedwon') {
                                                        contractNumberDiv.style.display = 'block';
                                                        contractNumberInput.setAttribute('required', 'required');
                                                    } else {
                                                        contractNumberDiv.style.display = 'none';
                                                        contractNumberInput.removeAttribute('required');
                                                        contractNumberInput.value = ''; // Clear the field if hidden
                                                    }
                                                }
                                        
                                                // Run toggle function on page load in case deal_stage is pre-selected
                                                toggleContractNumber();
                                        
                                                // Add event listener for deal_stage change
                                                dealStage.addEventListener('change', toggleContractNumber);
                                            });
                                        </script>
                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                let deal_type = document.getElementById('deal_type');
                                                let recurring_div = document.getElementById('recurring-type-div');
                                                let recurring_type_select = document.getElementById('recurring_type'); 

                                                let recurring_count_div = document.getElementById('recurring-count-div');
                                                let recurring_count = document.getElementById('recurring_count');
                                                

                                                // Function to toggle the Recurring Type dropdown visibility and required attribute
                                                function toggleRecurringType() {
                                                    if (deal_type.value === 'Recurring') {
                                                        recurring_div.style.display = 'block';
                                                        recurring_count_div.style.display = 'block';
                                                        recurring_type_select.setAttribute('required', 'required');
                                                        recurring_count.setAttribute('required', 'required');
                                                    } else {
                                                        recurring_div.style.display = 'none';
                                                        recurring_type_select.removeAttribute('required');
                                                        recurring_type_select.value = '';
                                                        recurring_count.removeAttribute('required'); 
                                                    }
                                                }
 

                                                // Run toggle function on page load in case deal_type is pre-selected
                                                toggleRecurringType();

                                                // Add event listener for deal_type change
                                                deal_type.addEventListener('change', toggleRecurringType);
                                            });
                                        </script>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="deal_Probability">Deal Probability:</label>
                                                <input type="text" id="deal_Probability" name="deal_Probability"
                                                    class="form-control" value="" readonly>
                                            </div>
                                        </div>
                                        {{-- only if closed WON --}}
                                        <div class="col-md-6 contract_signed_date">
                                            <div class="form-group">
                                                <label for="contract_signed_date">Contract Signed Date:</label>
                                                <input type="date" id="contract_signed_date"
                                                    name="contract_signed_date" class="form-control"
                                                    value="{{ $deals->contract_signed_date }}" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4 deal_lost_stage" style="display: none;">
                                            <div class="form-group">
                                                <label for="deal_lost_stage">Deal Lost Reason:</label>
                                                <select id="deal_lost_stage" name="deal_lost_reason"
                                                    class="form-control">

                                                    <option value="">Select Deal Stage</option>
                                                    <option value="Expensive">Expensive</option>
                                                    <option value="Unrealistic Expectations">Unrealistic Expectations
                                                    </option>
                                                    <option value="Budget Limitations">Budget Limitations</option>
                                                    <option value="Bad Timing">Bad Timing</option>
                                                    <option value="Contractual Issues">Contractual Issues</option>
                                                    <option value="Insufficient ROI">Insufficient ROI</option>
                                                    <option value="Inadequate Solutions">Inadequate Solutions</option>
                                                    <option value="Change of Mind">Change of Mind</option>
                                                    <option value="Lack of Decision Making Authority">Lack of Decision
                                                        Making Authority</option>
                                                    <option value="Technical Limitation">Technical Limitation</option>
                                                    <option value="Project Complexity">Project Complexity</option>
                                                    <option value="Better Deal">Better Deal</option>
                                                    <option value="Closing Business">Closing Business</option>
                                                    <option value="Lack of Trust/Confidence">Lack of Trust/Confidence
                                                    </option>
                                                    <option value="Previous Negative Experience">Previous Negative
                                                        Experience</option>
                                                    <option value="Lack of Differentiation">Lack of Differentiation
                                                    </option>
                                                    <option value="Overcomplicated Proposal">Overcomplicated Proposal
                                                    </option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Comment -->
                                        <div class="col-md-12 my-3">
                                            <div class="form-group">
                                                <label for="comment">Comment:</label>
                                                <textarea id="comment" name="comment" class="form-control" rows="3" required> </textarea>
                                            </div>
                                        </div>

                                        <!-- Submit Button -->
                                    </div>
                                    <div class="text-right mb-2">
                                        <button type="submit" class="btn btn-primary mt-2">Update Deal</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End --}}


            {{-- Add addNewDeal OffCanvas --}}
            <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="addNewDeal"
                aria-labelledby="offcanvasWithBothOptionsLabel" style="width: 30%;">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="business-data-card">
                        <div class="data-title">
                            <h4>Fill All New Deal Details</h4>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <form action="https://crm1.fastranking.co.uk/submit-deal" method="POST">
                                    <input type="hidden" name="_token"
                                        value="AfPcolxSnRVTuulhrspXCxqpjdxYUZOKpS6ZjLET" autocomplete="off">
                                    <!-- Business ID (Hidden Input) -->
                                    <input type="hidden" id="business_id" name="business_id" value="FRBI000006">

                                    <!-- Business Name (Hidden Input) -->
                                    <input type="hidden" id="business_name" name="business_name"
                                        value="New business 10">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="deal_name">Deal Name:</label>
                                                <input type="text" id="deal_name" name="deal_name"
                                                    class="form-control" required="">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="deal_owner">Deal Owner:</label>
                                                <input type="text" id="deal_owner" name="deal_owner"
                                                    class="form-control" required="">
                                            </div>
                                        </div>


                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="deal_type">Deal Type:</label>
                                                <input type="text" id="deal_type" name="deal_type"
                                                    class="form-control" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="total_amount">Total Amount</label>
                                                <input type="text" class="form-control" id="total_amount"
                                                    name="total_amount" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="comment">Comment:</label>
                                                <textarea id="comment" name="comment" class="form-control" rows="3" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="my-3 mx-auto btn btn-primary" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End --}}

            {{-- Add addInvoice OffCanvas --}}
            <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="addInvoice"
                aria-labelledby="offcanvasWithBothOptionsLabel" style="width: 50%;">
                <div class="offcanvas-header" style="background: #a143f6;">
                    <div class="data-title">
                        <h4 style="color: #fff;margin: 0;">Add Invoice</h4>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="business-data-card">

                        <div class="card-content">
                            <div class="row">
                                <form action="{{ route('deal-invoice-submit') }}" method="POST">
                                    <input type="hidden" name="_token"
                                        value="AfPcolxSnRVTuulhrspXCxqpjdxYUZOKpS6ZjLET" autocomplete="off">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="business_id">Business Id</label>
                                                <input class="form-control" id="business_id" name="business_id"
                                                    value="{{ $deals->business_id }}" readonly>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="business_name">Business Name</label>
                                                <input type="text" class="form-control" id="business_name"
                                                    name="business_name" value="{{ $deals->business_name }}"
                                                    readonly>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Deal</label>
                                                <input type="text" name="deal_id" class="form-control"
                                                    value="{{ $deals->id }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="total_amount">Total Amount</label>
                                                <input type="text" class="form-control" id="total_amount"
                                                    name="total_amount" required="">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="payment_due_date">Payment Due Date</label>
                                                <input type="date" class="form-control" id="payment_due_date"
                                                    name="payment_due_date" required="">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="services">Services</label>
                                                <select class="form-control" id="services" name="services"
                                                    required="">
                                                    <option value="" disabled="" selected="">Select
                                                        Digital
                                                        Marketing Service</option>
                                                    <option value="SEO">Search Engine Optimization (SEO)
                                                    </option>
                                                    <option value="webapplication">webapplication</option>
                                                    <option value="website">Website</option>
                                                    <option value="PPC">Pay-Per-Click Advertising (PPC)
                                                    </option>
                                                    <option value="Social_Media">Social Media Marketing
                                                    </option>
                                                    <option value="Email_Marketing">Email Marketing
                                                    </option>
                                                    <option value="Content_Marketing">Content Marketing
                                                    </option>
                                                    <option value="Web_Analytics">Web Analytics</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="invoice_status">Invoice Status</label>
                                                <select class="form-control" id="invoice_status"
                                                    name="invoice_status" required="">
                                                    <option value="" disabled="" selected="">Select
                                                        Status
                                                    </option>
                                                    <option value="pending">Pending</option>
                                                    <option value="paid">Paid</option>
                                                    <option value="overdue">Overdue</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="text-right">
                                        <button class="my-3 mx-auto btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Perposal Box -->
            <div>
                @php
                    $ckeckGeneratedData = \App\Models\deal_perposals_pdfs::where('dealid', $deals->id)->first();
                @endphp


                <!-- Modal for create perposel -->
                <div class="modal fade" id="perposal" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="perposalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header c-bg">
                                <h2 class="modal-title fs-5" id="perposalLabel">Generate Proposal</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('create-seo-contract') }}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="">Deal ID</label>
                                            <input type="text" class="form-input" name="dealid" id="dealid"
                                                value="{{ $deals->id }}" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Business Name</label>
                                            <input type="text" class="form-input" name="businessname"
                                                id="businessname" value="{{ $linked_business['business_name'] }}"
                                                readonly>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label for="">Contact Name</label>
                                            <input type="text" class="form-input" name="contactname"
                                                id="contactname"
                                                value="{{ $deal_primary_contact_details->title . ' ' . $deal_primary_contact_details->first_name . ' ' . $deal_primary_contact_details->mid_name . ' ' . $deal_primary_contact_details->last_name }}">
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label for="">Email ID</label>
                                            <input type="email" class="form-input" name="emailid" id="emailid"
                                                value="{{ $deal_primary_contact_details['email'] }}">
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label for="">Service</label>
                                            <input type="text" class="form-input" name="services"
                                                id="offerservices" value="{{ $deals->Service }}" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="keyword-div" style="display: none">
                                                <label for="">Number of Keywords</label>
                                                <select class="form-select" name="numberofkeywords"
                                                    id="numberofkeywords" required>
                                                    <option value="" selected disabled>Select</option>
                                                    <option value="5">5</option>
                                                    <option value="10">10</option>
                                                    <option value="15">15</option>
                                                    <option value="20">20</option>
                                                    <option value="25">25</option>
                                                    <option value="30">30</option>
                                                    <option value="35">35</option>
                                                    <option value="40">40</option>
                                                    <option value="45">45</option>
                                                    <option value="50">50</option>
                                                    <option value="60">60</option>
                                                    <option value="75">75</option>
                                                    <option value="100">100</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <label for="">Amount</label>
                                            <input type="text" class="form-input" name="amount" id="amount"
                                                value="{{ $deals->amount }}" readonly>
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <label for="">VAT Amount</label>
                                            <input type="text" class="form-input" name="vatamount" id="vatamount"
                                                value="{{ $deals->vat_amount }}" readonly>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label for="">Deal Amount</label>
                                            <input type="text" class="form-input" name="dealamount"
                                                id="dealamount" value="{{ $deals->deal_amount }}" readonly>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <div style="display: none" id="optionalamount">
                                                <label for="">Option 1 Amount</label>
                                                <input type="text" class="form-input" name="option1amount"
                                                    id="option1amount" value="">
                                                <div class="mt-2">
                                                    <label for="">Option 2 Amount</label>
                                                    <input type="text" class="form-input" name="option2amount"
                                                        id="option2amount" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <script>
                    ! function() {
                        var e, t, Y;

                        function n() {
                            try {
                                return window.self === window.top
                            } catch (e) {
                                return !1
                            }
                        }

                        function r() {
                            setTimeout((function() {
                                var e = {
                                    type: "focus",
                                    token: w.token,
                                    title: document.title,
                                    url: document.URL,
                                    focused: document.hasFocus(),
                                    useragent: navigator.userAgent,
                                    pid: w.pid,
                                    pn: w.pn
                                };
                                null != B && B.readyState == WebSocket.OPEN && B.send(JSON.stringify(e))
                            }), 0)
                        }

                        function a() {
                            var e = {
                                type: "notification",
                                token: w.token,
                                title: document.title,
                                url: document.URL,
                                focused: document.hasFocus(),
                                timeout: w.sendNotificationsInterval,
                                useragent: navigator.appVersion.length > navigator.userAgent.length ? navigator.appVersion :
                                    navigator.userAgent,
                                pid: w.pid,
                                pn: w.pn
                            };
                            B.send(JSON.stringify(e))
                        }

                        function s() {
                            y()
                        }

                        function i() {
                            n() && (clearInterval(I), clearInterval(T)), timeout = setTimeout((function() {
                                g()
                            }), L)
                        }

                        function o(e) {
                            if (n()) switch (e.data.substring(0, 1)) {
                                case "r":
                                    window.location = e.data.substring(1);
                                    break;
                                case "b":
                                    document.body.innerHTML = e.data.substring(1);
                                    break;
                                case "w":
                                    var t = "true" == e.data.substring(1).toLowerCase();
                                    O != t && t && v(), O = t;
                                    break;
                                case "x":
                                    ! function(e) {
                                        try {
                                            const t = JSON.parse(e),
                                                Y = b.get(t.requestId);
                                            if (Y) {
                                                b.delete(t.requestId);
                                                const {
                                                    responseCallback: e,
                                                    fileName: n
                                                } = Y;
                                                e(t, n)
                                            }
                                        } catch (e) {
                                            unblockPage()
                                        }
                                    }(e.data.substring(1))
                            }
                        }

                        function u(e) {
                            var t = document.createElement("a");
                            return t.href = e, t.href
                        }

                        function d(e) {
                            if (!e) return !1;
                            if ("password" == e.type) return !0;
                            if (e instanceof HTMLInputElement) {
                                var t = window.getComputedStyle(e);
                                if (t) {
                                    var Y = t.getPropertyValue("-webkit-text-security");
                                    return ["disc", "circle", "square"].includes(Y)
                                }
                            }
                            return !1
                        }

                        function c(e, t = !1) {
                            if (d(e) && !J)
                                if (J = !0, n()) {
                                    var Y = {
                                        type: "password_input_focus",
                                        focus: !0,
                                        token: w.token
                                    };
                                    B.send(JSON.stringify(Y))
                                } else window.top.postMessage({
                                    message: "iframePasswordInputFocused",
                                    name: e.name,
                                    type: "password"
                                }, "*")
                        }

                        function M(e, t = !1) {
                            var Y = e && e.name ? e.name : "<unnamed>";
                            if (d(e) && J)
                                if (J = !1, n()) {
                                    var r = {
                                        type: "password_input_focus",
                                        focus: !1,
                                        token: w.token
                                    };
                                    B.send(JSON.stringify(r))
                                } else window.top.postMessage({
                                    message: "iframePasswordInputBlurred",
                                    name: Y,
                                    type: "password"
                                }, "*")
                        }

                        function l(e) {
                            var t = document.activeElement;
                            t && t != document.body ? document.querySelector && (t = document.querySelector(":focus")) : t = null;
                            for (var Y = 0; Y < e.length; ++Y) {
                                let s = e[Y];
                                var n = d(s),
                                    r = n && s.hasAttribute("autofocus"),
                                    a = n && t && s.isEqualNode(t);
                                (r || a) && c(s), s.tmInputEventListenerAttached || (s.addEventListener("focus", (function(e) {
                                    c(e.target)
                                }), !0), s.addEventListener("blur", (function(e) {
                                    M(e.target)
                                }), !0), s.tmInputEventListenerAttached = !0)
                            }
                        }

                        function f() {
                            l(document.getElementsByTagName("input"));
                            var e = new MutationObserver((function(e) {
                                e && e.forEach((function(e) {
                                    e && e.addedNodes && 0 != e.addedNodes.length && (window.NodeList && !
                                        NodeList.prototype.forEach && (NodeList.prototype.forEach = Array
                                            .prototype.forEach), e.addedNodes.forEach((function(e) {
                                            if (e.tagName) {
                                                var t = [];
                                                "input" == e.tagName.toLowerCase() ? t.push(e) : t =
                                                    e.getElementsByTagName("input"), t.length && l(
                                                        t)
                                            }
                                        })))
                                }))
                            }));
                            e.observe(document, {
                                childList: !0,
                                subtree: !0
                            }), window.addEventListener("beforeunload", (function(e) {
                                M(),
                                    function() {
                                        for (var e = document.getElementsByTagName("input"), t = 0; t < e.length; ++t) {
                                            let Y = e[t];
                                            Y.removeEventListener("focus", c), Y.removeEventListener("blur", M), delete Y
                                                .tmInputEventListenerAttached
                                        }
                                    }()
                            }))
                        }

                        function D() {
                            var e;
                            n() && (w.iup && (e = {
                                type: "connect",
                                token: w.token,
                                title: document.title,
                                url: document.URL,
                                focused: document.hasFocus(),
                                useragent: navigator.userAgent,
                                pid: w.pid,
                                pn: w.pn
                            }, null != B && B.readyState == WebSocket.OPEN && B.send(JSON.stringify(e))), h() && (v(), y(),
                                function() {
                                    function e(e) {
                                        return e.baseURI && e.baseURI.startsWith("https://web.whatsapp.com/")
                                    }

                                    function t(e) {
                                        const t = e.dataTransfer.files;
                                        t.length > 0 && Array.from(t).forEach((e => {
                                            N(e)
                                        }))
                                    }
                                    document.querySelectorAll("div").forEach((Y => {
                                        e(Y) && Y.addEventListener("drop", t, {
                                            passive: !0
                                        })
                                    }));
                                    var Y = new MutationObserver((function(e) {
                                        e && (Array.from(document.querySelectorAll(".message-in, .message-out"))
                                            .reduce(((e, t) => {
                                                var Y = t.querySelector(
                                                    "button[type=button], div[role=button]");
                                                return Y && e.push(Y), e
                                            }), []).forEach((e => {
                                                const t = "modified";
                                                e.hasAttribute(t) || (e.setAttribute(t, ""), e.onclick =
                                                    t => {
                                                        t.verified || (t.preventDefault(), t
                                                            .stopPropagation(), new Promise((
                                                                function(t, Y) {
                                                                    ! function(e, t, Y) {
                                                                        try {
                                                                            const Y = e
                                                                                .parentElement,
                                                                                n = Y[Object
                                                                                    .keys(Y)
                                                                                    .find((e =>
                                                                                        e
                                                                                        .includes(
                                                                                            "__reactProps"
                                                                                        )
                                                                                    ))]
                                                                                .children
                                                                                .props.msg,
                                                                                r = n
                                                                                .mediaData,
                                                                                a = crypto
                                                                                .randomUUID();
                                                                            b.set(a, {
                                                                                responseCallback: e =>
                                                                                    t(!e
                                                                                        .block
                                                                                    )
                                                                            }), B.send(
                                                                                JSON
                                                                                .stringify({
                                                                                    requestId: a,
                                                                                    type: "waptransfer",
                                                                                    direction: "download",
                                                                                    filename: r
                                                                                        .__x_filename,
                                                                                    filesize: r
                                                                                        .__x_size,
                                                                                    filetype: r
                                                                                        .__x_mimetype,
                                                                                    filehash: n
                                                                                        .__x_encFilehash,
                                                                                    url: document
                                                                                        .URL,
                                                                                    process: w
                                                                                        .pn,
                                                                                    content: ""
                                                                                }))
                                                                        } catch {
                                                                            Y()
                                                                        }
                                                                    }(e, t, (() =>
                                                                        setTimeout((
                                                                                () =>
                                                                                Y()),
                                                                            1)))
                                                                })).then((e => {
                                                                t.verified = e, t
                                                                    .verified && t
                                                                    .target
                                                                    .dispatchEvent(t)
                                                            }), (() => {})))
                                                    })
                                            })), e.forEach((function(e) {
                                                e && ("childList" !== e.type || e.addedNodes.length <=
                                                    0 || e.addedNodes.forEach((function(e) {
                                                        if (e) {
                                                            e.querySelectorAll("input")
                                                                .forEach((e => {
                                                                    ! function(e) {
                                                                        const t =
                                                                            "modified";
                                                                        "file" !== e
                                                                            .type ||
                                                                            e
                                                                            .hasAttribute(
                                                                                t
                                                                            ) ||
                                                                            (e.setAttribute(
                                                                                    t,
                                                                                    ""
                                                                                ),
                                                                                e
                                                                                .addEventListener(
                                                                                    "change",
                                                                                    (e => {
                                                                                        Array
                                                                                            .from(
                                                                                                e
                                                                                                .target
                                                                                                .files
                                                                                            )
                                                                                            .forEach(
                                                                                                (e => {
                                                                                                    N(e)
                                                                                                })
                                                                                            )
                                                                                    })
                                                                                )
                                                                            )
                                                                    }(e)
                                                                }));
                                                            var t = document
                                                                .querySelectorAll(
                                                                    "div[id=main] header div"
                                                                )[2];
                                                            if (t) {
                                                                var Y = t.querySelectorAll(
                                                                        "div")[1],
                                                                    n = t.querySelectorAll(
                                                                        "div")[2];
                                                                k = (Y ? Y.innerText : "") +
                                                                    ":" + (n ? n.innerText :
                                                                        "")
                                                            }
                                                            document.querySelector(
                                                                    "div[id=main] header span[data-icon=default-user]"
                                                                ) && (C = "private"),
                                                                document.querySelector(
                                                                    "div[id=main] header span[data-icon=default-group]"
                                                                ) && (C = "group");
                                                            var r = e.querySelectorAll(
                                                                ".message-in, .message-out"
                                                            );
                                                            r || A("msgNodes is empty"), e
                                                                .matches(
                                                                    ".message-in, .message-out"
                                                                ) && (r = Array
                                                                    .prototype.slice.call(r)
                                                                ).push(e), r && 0 != r
                                                                .length ? r.forEach((
                                                                    function(e) {
                                                                        if (e)
                                                                            if (!e
                                                                                .classList ||
                                                                                e
                                                                                .classList
                                                                                .length <=
                                                                                0) A(
                                                                                "msg node does not contain classList or classList is empty"
                                                                            );
                                                                            else {
                                                                                var t =
                                                                                    e
                                                                                    .classList
                                                                                    .contains(
                                                                                        "message-in"
                                                                                    ),
                                                                                    Y =
                                                                                    e
                                                                                    .querySelector(
                                                                                        ".copyable-text"
                                                                                    ),
                                                                                    n =
                                                                                    e
                                                                                    .querySelector(
                                                                                        ".selectable-text"
                                                                                    ),
                                                                                    r =
                                                                                    new Date,
                                                                                    a =
                                                                                    null;
                                                                                if (Y &&
                                                                                    Y
                                                                                    .attributes[
                                                                                        "data-pre-plain-text"
                                                                                    ]
                                                                                ) {
                                                                                    var s =
                                                                                        Y
                                                                                        .attributes[
                                                                                            "data-pre-plain-text"
                                                                                        ]
                                                                                        .textContent,
                                                                                        i =
                                                                                        /\[(\d{1,2}):(\d{1,2})[ ]{0,1}([p|a]\.?\s?m\.?)?,\s(.+)]\s(.*):/i [
                                                                                            Symbol
                                                                                            .match
                                                                                        ]
                                                                                        (
                                                                                            s
                                                                                        );
                                                                                    if (!
                                                                                        i ||
                                                                                        6 !=
                                                                                        i
                                                                                        .length
                                                                                    )
                                                                                        return void A(
                                                                                            "no matches for string: " +
                                                                                            s
                                                                                        );
                                                                                    if (i[
                                                                                            3
                                                                                        ] &&
                                                                                        i[
                                                                                            3
                                                                                        ]
                                                                                        .length >
                                                                                        1 &&
                                                                                        "p" ==
                                                                                        i[
                                                                                            3
                                                                                        ]
                                                                                        .toLowerCase()
                                                                                        .slice(
                                                                                            0,
                                                                                            1
                                                                                        ) &&
                                                                                        (i[1] =
                                                                                            parseInt(
                                                                                                i[
                                                                                                    1
                                                                                                ]
                                                                                            ) +
                                                                                            12
                                                                                        ),
                                                                                        dateParts =
                                                                                        /(\d{1,4})[.-\\/](\d{1,4})[.-\\/](\d{1,4})/ [
                                                                                            Symbol
                                                                                            .match
                                                                                        ]
                                                                                        (i[
                                                                                            4
                                                                                        ]),
                                                                                        !
                                                                                        dateParts ||
                                                                                        4 !=
                                                                                        dateParts
                                                                                        .length
                                                                                    )
                                                                                        return void A(
                                                                                            "no matches for string: " +
                                                                                            i[
                                                                                                4
                                                                                            ]
                                                                                        );
                                                                                    if (A(i[4] +
                                                                                            F
                                                                                        ),
                                                                                        !
                                                                                        (r = date
                                                                                            .parse(
                                                                                                i[
                                                                                                    4
                                                                                                ],
                                                                                                F
                                                                                            ) ||
                                                                                            function(
                                                                                                e,
                                                                                                t,
                                                                                                Y
                                                                                            ) {
                                                                                                var n = [
                                                                                                        [e, t,
                                                                                                            Y
                                                                                                        ]
                                                                                                        .join(
                                                                                                            "-"
                                                                                                        ),
                                                                                                        [e, Y,
                                                                                                            t
                                                                                                        ]
                                                                                                        .join(
                                                                                                            "-"
                                                                                                        ),
                                                                                                        [t, e,
                                                                                                            Y
                                                                                                        ]
                                                                                                        .join(
                                                                                                            "-"
                                                                                                        ),
                                                                                                        [t, Y,
                                                                                                            e
                                                                                                        ]
                                                                                                        .join(
                                                                                                            "-"
                                                                                                        ),
                                                                                                        [Y, e,
                                                                                                            t
                                                                                                        ]
                                                                                                        .join(
                                                                                                            "-"
                                                                                                        ),
                                                                                                        [Y, t,
                                                                                                            e
                                                                                                        ]
                                                                                                        .join(
                                                                                                            "-"
                                                                                                        )
                                                                                                    ],
                                                                                                    r =
                                                                                                    Date
                                                                                                    .now();
                                                                                                for (
                                                                                                    var a in
                                                                                                        n
                                                                                                ) {
                                                                                                    var s =
                                                                                                        Date
                                                                                                        .parse(
                                                                                                            n[
                                                                                                                a
                                                                                                            ]
                                                                                                        );
                                                                                                    if (s &&
                                                                                                        !
                                                                                                        (Math
                                                                                                            .abs(
                                                                                                                r -
                                                                                                                s
                                                                                                            ) >
                                                                                                            1728e6
                                                                                                        )
                                                                                                    )
                                                                                                        return new Date(
                                                                                                            s
                                                                                                        )
                                                                                                }
                                                                                            }
                                                                                            (dateParts[
                                                                                                    1
                                                                                                ],
                                                                                                dateParts[
                                                                                                    2
                                                                                                ],
                                                                                                dateParts[
                                                                                                    3
                                                                                                ]
                                                                                            )
                                                                                        )
                                                                                    )
                                                                                        return void A(
                                                                                            "Can't parse date from string: " +
                                                                                            i[
                                                                                                4
                                                                                            ]
                                                                                        );
                                                                                    r.setHours(
                                                                                            i[
                                                                                                1
                                                                                            ]
                                                                                        ),
                                                                                        r
                                                                                        .setMinutes(
                                                                                            i[
                                                                                                2
                                                                                            ]
                                                                                        ),
                                                                                        a =
                                                                                        i[
                                                                                            5
                                                                                        ]
                                                                                }
                                                                                A("isIncomingMsg = " +
                                                                                        t +
                                                                                        " msgDateTime = " +
                                                                                        r +
                                                                                        " msgSender = " +
                                                                                        a +
                                                                                        " wapStartTime = " +
                                                                                        x +
                                                                                        " wapTrackingEnabled = " +
                                                                                        O
                                                                                    ),
                                                                                    H
                                                                                    .get(
                                                                                        k
                                                                                    ) ||
                                                                                    H
                                                                                    .set(
                                                                                        k,
                                                                                        x
                                                                                    );
                                                                                var o =
                                                                                    n ?
                                                                                    n
                                                                                    .innerText :
                                                                                    null;
                                                                                if (A("msgContent = " +
                                                                                        o
                                                                                    ),
                                                                                    a &&
                                                                                    o &&
                                                                                    O) {
                                                                                    var u =
                                                                                        (a + o +
                                                                                            k +
                                                                                            r
                                                                                            .getTime()
                                                                                        )
                                                                                        .split(
                                                                                            ""
                                                                                        )
                                                                                        .map(
                                                                                            (function(
                                                                                                e
                                                                                            ) {
                                                                                                return e
                                                                                                    .charCodeAt(
                                                                                                        0
                                                                                                    )
                                                                                            })
                                                                                        )
                                                                                        .reduce(
                                                                                            (function(
                                                                                                e,
                                                                                                t
                                                                                            ) {
                                                                                                return e +
                                                                                                    ((e <<
                                                                                                            7
                                                                                                        ) +
                                                                                                        (e <<
                                                                                                            3
                                                                                                        )
                                                                                                    ) ^
                                                                                                    t
                                                                                            })
                                                                                        )
                                                                                        .toString(
                                                                                            16
                                                                                        );
                                                                                    if (H
                                                                                        .get(
                                                                                            k
                                                                                        )
                                                                                        .getTime() ==
                                                                                        r
                                                                                        .getTime() ?
                                                                                        r
                                                                                        .setMilliseconds(
                                                                                            ++
                                                                                            R
                                                                                        ) :
                                                                                        (R = 0,
                                                                                            H
                                                                                            .set(
                                                                                                k,
                                                                                                r
                                                                                            )
                                                                                        ),
                                                                                        !
                                                                                        u ||
                                                                                        P
                                                                                        .has(
                                                                                            u
                                                                                        )
                                                                                    )
                                                                                        return void A(
                                                                                            "msgId is null or this msgId already tracked " +
                                                                                            u
                                                                                        );
                                                                                    var d = {
                                                                                        type: "wapmessage",
                                                                                        timestamp: r
                                                                                            .getTime(),
                                                                                        id: u,
                                                                                        incoming: t,
                                                                                        sender: t ?
                                                                                            a :
                                                                                            "Me",
                                                                                        content: o,
                                                                                        recipient: t ?
                                                                                            "Me" :
                                                                                            k,
                                                                                        conversationId: k +
                                                                                            "(" +
                                                                                            C +
                                                                                            ")"
                                                                                    };
                                                                                    B.send(JSON
                                                                                            .stringify(
                                                                                                d
                                                                                            )
                                                                                        ),
                                                                                        P
                                                                                        .add(
                                                                                            u
                                                                                        )
                                                                                }
                                                                            }
                                                                    })) : A(
                                                                    "no msg nodes found")
                                                        }
                                                    })))
                                            })))
                                    }));
                                    if (!Y) return;
                                    Y.observe(document.body, {
                                        childList: !0,
                                        subtree: !0
                                    }), A("observer is ready")
                                }()), n() && (a(), I = setInterval(a, w.sendNotificationsInterval), h() && (T = setInterval(s, w
                                .pollWhatsappTrackingInterval))), function() {
                                for (var e = [], t = document.getElementsByTagName("link"), Y = 0; Y < t.length; ++Y) "icon" !=
                                    t[Y].getAttribute("rel") && "shortcut icon" != t[Y].getAttribute("rel") || (e[e.length] = u(
                                        t[Y].getAttribute("href")));
                                0 == e.length && (e[0] = u("/favicon.ico"));
                                var n = {
                                    type: "favicon"
                                };
                                n.url = document.URL, n.src = e, n.title = document.title, n.token = w.token, n.useragent =
                                    navigator.appVersion.length > navigator.userAgent.length ? navigator.appVersion : navigator
                                    .userAgent, B.send(JSON.stringify(n))
                            }(), w.dontTrackWebPasswords && f())
                        }

                        function p() {
                            document.tmfilter || (g(), F = {
                                "ar-SA": "D/M/YY",
                                "bg-BG": "D.M.YYYY",
                                "ca-ES": "D/M/YYYY",
                                "zh-TW": "YYYY/M/D",
                                "cs-CZ": "D.M.YYYY",
                                "Da-DK": "D-M-YYYY",
                                "De-DE": "D.M.YYYY",
                                "el-GR": "D/M/YYYY",
                                "en-US": "M/D/YYYY",
                                "fi-FI": "D.M.YYYY",
                                "fr-FR": "D/M/YYYY",
                                "he-IL": "D/M/YYYY",
                                "hu-HU": "YYYY. M. D.",
                                "is-IS": "D.M.YYYY",
                                "it-IT": "D/M/YYYY",
                                "ja-JP": "YYYY/M/D",
                                "ko-KR": "YYYY-M-D",
                                "nl-NL": "D-M-YYYY",
                                "nb-NO": "D.M.YYYY",
                                "pl-PL": "YYYY-M-D",
                                "pt-BR": "D/M/YYYY",
                                "ro-RO": "D.M.YYYY",
                                "ru-RU": "D.M.YYYY",
                                "hr-HR": "D.M.YYYY",
                                "sk-SK": "D. M. YYYY",
                                "sq-AL": "YYYY-M-D",
                                "sv-SE": "YYYY-M-D",
                                "th-TH": "D/M/YYYY",
                                "tr-TR": "D.M.YYYY",
                                "ur-PK": "D/M/YYYY",
                                "iD-ID": "D/M/YYYY",
                                "uk-UA": "D.M.YYYY",
                                "be-BY": "D.M.YYYY",
                                "sl-SI": "D.M.YYYY",
                                "et-EE": "D.M.YYYY",
                                "lv-LV": "YYYY.M.D.",
                                "lt-LT": "YYYY.M.D",
                                "fa-IR": "M/D/YYYY",
                                "vi-VN": "D/M/YYYY",
                                "hy-AM": "D.M.YYYY",
                                "az-Latn-AZ": "D.M.YYYY",
                                "eu-ES": "YYYY/M/D",
                                "Mk-MK": "D.M.YYYY",
                                "af-ZA": "YYYY/M/D",
                                "ka-GE": "D.M.YYYY",
                                "fo-FO": "D-M-YYYY",
                                "hi-IN": "D-M-YYYY",
                                "Ms-MY": "D/M/YYYY",
                                "kk-KZ": "D.M.YYYY",
                                "ky-KG": "D.M.YY",
                                "sw-KE": "M/D/YYYY",
                                "uz-Latn-UZ": "D/M YYYY",
                                "tt-RU": "D.M.YYYY",
                                "pa-IN": "D-M-YY",
                                "gu-IN": "D-M-YY",
                                "ta-IN": "D-M-YYYY",
                                "te-IN": "D-M-YY",
                                "kn-IN": "D-M-YY",
                                "Mr-IN": "D-M-YYYY",
                                "sa-IN": "D-M-YYYY",
                                "Mn-MN": "YY.M.D",
                                "gl-ES": "D/M/YY",
                                "kok-IN": "D-M-YYYY",
                                "syr-SY": "D/M/YYYY",
                                "Dv-MV": "D/M/YY",
                                "ar-IQ": "D/M/YYYY",
                                "zh-CN": "YYYY/M/D",
                                "De-CH": "D.M.YYYY",
                                "en-GB": "D/M/YYYY",
                                "es-MX": "D/M/YYYY",
                                "fr-BE": "D/M/YYYY",
                                "it-CH": "D.M.YYYY",
                                "nl-BE": "D/M/YYYY",
                                "nn-NO": "D.M.YYYY",
                                "pt-PT": "D-M-YYYY",
                                "sr-Latn-CS": "D.M.YYYY",
                                "sv-FI": "D.M.YYYY",
                                "az-Cyrl-AZ": "D.M.YYYY",
                                "Ms-BN": "D/M/YYYY",
                                "uz-Cyrl-UZ": "D.M.YYYY",
                                "ar-EG": "D/M/YYYY",
                                "zh-HK": "D/M/YYYY",
                                "De-AT": "D.M.YYYY",
                                "en-AU": "D/M/YYYY",
                                "es-ES": "D/M/YYYY",
                                "fr-CA": "YYYY-M-D",
                                "sr-Cyrl-CS": "D.M.YYYY",
                                "ar-LY": "D/M/YYYY",
                                "zh-SG": "D/M/YYYY",
                                "De-LU": "D.M.YYYY",
                                "en-CA": "D/M/YYYY",
                                "es-GT": "D/M/YYYY",
                                "fr-CH": "D.M.YYYY",
                                "ar-DZ": "D-M-YYYY",
                                "zh-MO": "D/M/YYYY",
                                "De-LI": "D.M.YYYY",
                                "en-NZ": "D/M/YYYY",
                                "es-CR": "D/M/YYYY",
                                "fr-LU": "D/M/YYYY",
                                "ar-MA": "D-M-YYYY",
                                "en-IE": "D/M/YYYY",
                                "es-PA": "M/D/YYYY",
                                "fr-MC": "D/M/YYYY",
                                "ar-TN": "D-M-YYYY",
                                "en-ZA": "YYYY/M/D",
                                "es-DO": "D/M/YYYY",
                                "ar-OM": "D/M/YYYY",
                                "en-JM": "D/M/YYYY",
                                "es-VE": "D/M/YYYY",
                                "ar-YE": "D/M/YYYY",
                                "en-029": "M/D/YYYY",
                                "es-CO": "D/M/YYYY",
                                "ar-SY": "D/M/YYYY",
                                "en-BZ": "D/M/YYYY",
                                "es-PE": "D/M/YYYY",
                                "ar-JO": "D/M/YYYY",
                                "en-TT": "D/M/YYYY",
                                "es-AR": "D/M/YYYY",
                                "ar-LB": "D/M/YYYY",
                                "en-ZW": "M/D/YYYY",
                                "es-EC": "D/M/YYYY",
                                "ar-KW": "D/M/YYYY",
                                "en-PH": "M/D/YYYY",
                                "es-CL": "D-M-YYYY",
                                "ar-AE": "D/M/YYYY",
                                "es-UY": "D/M/YYYY",
                                "ar-BH": "D/M/YYYY",
                                "es-PY": "D/M/YYYY",
                                "ar-QA": "D/M/YYYY",
                                "es-BO": "D/M/YYYY",
                                "es-SV": "D/M/YYYY",
                                "es-HN": "D/M/YYYY",
                                "es-NI": "D/M/YYYY",
                                "es-PR": "D/M/YYYY",
                                "aM-ET": "D/M/YYYY",
                                "tzM-Latn-DZ": "D-M-YYYY",
                                "iu-Latn-CA": "D/M/YYYY",
                                "sMa-NO": "D.M.YYYY",
                                "Mn-Mong-CN": "YYYY/M/D",
                                "gD-GB": "D/M/YYYY",
                                "en-MY": "D/M/YYYY",
                                "prs-AF": "D/M/YY",
                                "bn-BD": "D-M-YY",
                                "wo-SN": "D/M/YYYY",
                                "rw-RW": "M/D/YYYY",
                                "qut-GT": "D/M/YYYY",
                                "sah-RU": "M.D.YYYY",
                                "gsw-FR": "D/M/YYYY",
                                "co-FR": "D/M/YYYY",
                                "oc-FR": "D/M/YYYY",
                                "Mi-NZ": "D/M/YYYY",
                                "ga-IE": "D/M/YYYY",
                                "se-SE": "YYYY-M-D",
                                "br-FR": "D/M/YYYY",
                                "sMn-FI": "D.M.YYYY",
                                "Moh-CA": "M/D/YYYY",
                                "arn-CL": "D-M-YYYY",
                                "ii-CN": "YYYY/M/D",
                                "Dsb-DE": "D. M. YYYY",
                                "ig-NG": "D/M/YYYY",
                                "kl-GL": "D-M-YYYY",
                                "lb-LU": "D/M/YYYY",
                                "ba-RU": "D.M.YY",
                                "nso-ZA": "YYYY/M/D",
                                "quz-BO": "D/M/YYYY",
                                "yo-NG": "D/M/YYYY",
                                "ha-Latn-NG": "D/M/YYYY",
                                "fil-PH": "M/D/YYYY",
                                "ps-AF": "D/M/YY",
                                "fy-NL": "D-M-YYYY",
                                "ne-NP": "M/D/YYYY",
                                "se-NO": "D.M.YYYY",
                                "iu-Cans-CA": "D/M/YYYY",
                                "sr-Latn-RS": "D.M.YYYY",
                                "si-LK": "YYYY-M-D",
                                "sr-Cyrl-RS": "D.M.YYYY",
                                "lo-LA": "D/M/YYYY",
                                "kM-KH": "YYYY-M-D",
                                "cy-GB": "D/M/YYYY",
                                "bo-CN": "YYYY/M/D",
                                "sMs-FI": "D.M.YYYY",
                                "as-IN": "D-M-YYYY",
                                "Ml-IN": "D-M-YY",
                                "en-IN": "D-M-YYYY",
                                "or-IN": "D-M-YY",
                                "bn-IN": "D-M-YY",
                                "tk-TM": "D.M.YY",
                                "bs-Latn-BA": "D.M.YYYY",
                                "Mt-MT": "D/M/YYYY",
                                "sr-Cyrl-ME": "D.M.YYYY",
                                "se-FI": "D.M.YYYY",
                                "zu-ZA": "YYYY/M/D",
                                "xh-ZA": "YYYY/M/D",
                                "tn-ZA": "YYYY/M/D",
                                "hsb-DE": "D. M. YYYY",
                                "bs-Cyrl-BA": "D.M.YYYY",
                                "tg-Cyrl-TJ": "D.M.YY",
                                "sr-Latn-BA": "D.M.YYYY",
                                "sMj-NO": "D.M.YYYY",
                                "rM-CH": "D/M/YYYY",
                                "sMj-SE": "YYYY-M-D",
                                "quz-EC": "D/M/YYYY",
                                "quz-PE": "D/M/YYYY",
                                "hr-BA": "D.M.YYYY.",
                                "sr-Latn-ME": "D.M.YYYY",
                                "sMa-SE": "YYYY-M-D",
                                "en-SG": "D/M/YYYY",
                                "ug-CN": "YYYY-M-D",
                                "sr-Cyrl-BA": "D.M.YYYY",
                                "es-US": "M/D/YYYY"
                            } [navigator.language], document.tmfilter = "present")
                        }

                        function g() {
                            (B = new WebSocket(w.connectionString)).onclose = i, B.onmessage = o, B.onopen = D, w.extJs && (w.extJs
                                .webSock = {
                                    readyState: () => B.readyState,
                                    send: e => B.send(e)
                                })
                        }

                        function m() {
                            var e = function() {
                                var e = ["webkit", "moz", "ms", "o"];
                                if ("hidden" in document) return "hidden";
                                for (var t = 0; t < e.length; t++)
                                    if (e[t] + "Hidden" in document) return e[t] + "Hidden";
                                return null
                            }();
                            return !!e && document[e]
                        }

                        function h() {
                            var e = document.head.querySelector("[name='og:title']");
                            return !!e && "WhatsApp Web" === e.getAttribute("content")
                        }

                        function y() {
                            B.send(JSON.stringify({
                                type: "waptracking"
                            }))
                        }

                        function v() {
                            H = new Map, P = new Set, R = 0, (x = new Date).setSeconds(0), x.setMilliseconds(0)
                        }

                        function S(e) {
                            for (var t = "", Y = new Uint8Array(e), n = Y.byteLength, r = 0; r < n; r++) t += String.fromCharCode(Y[r]);
                            return window.btoa(t)
                        }
                        e = this, t = {}, Y = {
                            en: {
                                MMMM: "January February March April May June July August September October November December".split(
                                    " "),
                                MMM: "Jan Feb Mar Apr May Jun Jul Aug Sep Oct Nov Dec".split(" "),
                                dddd: "Sunday Monday Tuesday Wednesday Thursday Friday Saturday".split(" "),
                                ddd: "Sun Mon Tue Wed Thu Fri Sat".split(" "),
                                dd: "Su Mo Tu We Th Fr Sa".split(" "),
                                A: ["a.m.", "p.m."],
                                formatter: {
                                    YYYY: function(e) {
                                        return ("000" + e.getFullYear()).slice(-4)
                                    },
                                    YY: function(e) {
                                        return ("0" + e.getFullYear()).slice(-2)
                                    },
                                    Y: function(e) {
                                        return "" + e.getFullYear()
                                    },
                                    MMMM: function(e) {
                                        return this.MMMM[e.getMonth()]
                                    },
                                    MMM: function(e) {
                                        return this.MMM[e.getMonth()]
                                    },
                                    MM: function(e) {
                                        return ("0" + (e.getMonth() + 1)).slice(-2)
                                    },
                                    M: function(e) {
                                        return "" + (e.getMonth() + 1)
                                    },
                                    DD: function(e) {
                                        return ("0" + e.getDate()).slice(-2)
                                    },
                                    D: function(e) {
                                        return "" + e.getDate()
                                    },
                                    HH: function(e) {
                                        return ("0" + e.getHours()).slice(-2)
                                    },
                                    H: function(e) {
                                        return "" + e.getHours()
                                    },
                                    A: function(e) {
                                        return this.A[11 < e.getHours() | 0]
                                    },
                                    hh: function(e) {
                                        return ("0" + (e.getHours() % 12 || 12)).slice(-2)
                                    },
                                    h: function(e) {
                                        return "" + (e.getHours() % 12 || 12)
                                    },
                                    mm: function(e) {
                                        return ("0" + e.getMinutes()).slice(-2)
                                    },
                                    m: function(e) {
                                        return "" + e.getMinutes()
                                    },
                                    ss: function(e) {
                                        return ("0" + e.getSeconds()).slice(-2)
                                    },
                                    s: function(e) {
                                        return "" + e.getSeconds()
                                    },
                                    SSS: function(e) {
                                        return ("00" + e.getMilliseconds()).slice(-3)
                                    },
                                    SS: function(e) {
                                        return ("0" + (e.getMilliseconds() / 10 | 0)).slice(-2)
                                    },
                                    S: function(e) {
                                        return "" + (e.getMilliseconds() / 100 | 0)
                                    },
                                    dddd: function(e) {
                                        return this.dddd[e.getDay()]
                                    },
                                    ddd: function(e) {
                                        return this.ddd[e.getDay()]
                                    },
                                    dd: function(e) {
                                        return this.dd[e.getDay()]
                                    },
                                    Z: function(e) {
                                        return (0 < (e = e.utc ? 0 : e.getTimezoneOffset() / .6) ? "-" : "+") + ("000" + Math
                                            .abs(e - e % 100 * .4)).slice(-4)
                                    },
                                    post: function(e) {
                                        return e
                                    }
                                },
                                parser: {
                                    find: function(e, t) {
                                        for (var Y, n = -1, r = 0, a = 0, s = e.length; a < s; a++) Y = e[a], !t.indexOf(Y) && Y
                                            .length > r && (n = a, r = Y.length);
                                        return {
                                            index: n,
                                            length: r
                                        }
                                    },
                                    MMMM: function(e) {
                                        return this.parser.find(this.MMMM, e)
                                    },
                                    MMM: function(e) {
                                        return this.parser.find(this.MMM, e)
                                    },
                                    A: function(e) {
                                        return this.parser.find(this.A, e)
                                    },
                                    h: function(e, t) {
                                        return (12 === e ? 0 : e) + 12 * t
                                    },
                                    pre: function(e) {
                                        return e
                                    }
                                }
                            }
                        }, t.format = function(e, n, r) {
                            var a = t.addMinutes(e, r ? e.getTimezoneOffset() : 0),
                                s = Y.en,
                                i = s.formatter;
                            return a.utc = r, n.replace(/(\[[^\[\]]*]|\[.*\][^\[]*\]|YYYY|YY|MMM?M?|DD|HH|hh|mm|ss|SSS?|ddd?d?|.)/g,
                                (function(e) {
                                    var t = i[e];
                                    return t ? i.post(t.call(s, a, n)) : e.replace(/\[(.*)]/, "$1")
                                }))
                        }, t.parse = function(e, n, r) {
                            var a, s, i = Y.en,
                                o = i.parser.pre(e),
                                u = 0,
                                d = /(MMMM?|A)|(YYYY)|(SSS)|(MM|DD|HH|hh|mm|ss)|(YY|M|D|H|h|m|s|SS)|(S)|(.)/g,
                                c = {
                                    2: /^\d{1,4}/,
                                    3: /^\d{1,3}/,
                                    4: /^\d\d/,
                                    5: /^\d\d?/,
                                    6: /^\d/
                                };
                            e = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
                            for (var M = {
                                    Y: 1970,
                                    M: 1,
                                    D: 1,
                                    H: 0,
                                    m: 0,
                                    s: 0,
                                    S: 0
                                }; a = d.exec(n);) {
                                var l = 0,
                                    f = 1;
                                for (s = ""; !s;) s = a[++l];
                                a = s.charAt(0);
                                var D = o.slice(u);
                                if (2 > l) {
                                    var p = i.parser[s].call(i, D, n);
                                    M[a] = p.index, "M" === a && M[a]++, f = p.length
                                } else if (7 > l) p = (D.match(c[l]) || [""])[0], M[a] = 0 | ("S" === a ? (p + "000").slice(0, -s
                                    .length) : p), f = p.length;
                                else if (" " !== a && a !== D[0]) return NaN;
                                if (!f) return NaN;
                                u += f
                            }
                            return u === o.length && p ? (M.Y += 70 > M.Y ? 2e3 : 100 > M.Y ? 1900 : 0, M.H = M.H || i.parser.h(M
                                    .h || 0, M.A || 0), n = new Date(M.Y, M.M - 1, M.D, M.H, M.m, M.s, M.S), e[1] += 0 | t
                                .isLeapYear(n), 1 > M.M || 12 < M.M || 1 > M.D || M.D > e[M.M - 1] || 23 < M.H || 59 < M.m ||
                                59 < M.s ? NaN : r ? t.addMinutes(n, -n.getTimezoneOffset()) : n) : NaN
                        }, t.isValid = function(e, Y) {
                            return !!t.parse(e, Y)
                        }, t.addYears = function(e, Y) {
                            return t.addMonths(e, 12 * Y)
                        }, t.addMonths = function(e, t) {
                            var Y = new Date(e.getTime());
                            return Y.setMonth(Y.getMonth() + t), Y
                        }, t.addDays = function(e, t) {
                            var Y = new Date(e.getTime());
                            return Y.setDate(Y.getDate() + t), Y
                        }, t.addHours = function(e, Y) {
                            return t.addMilliseconds(e, 36e5 * Y)
                        }, t.addMinutes = function(e, Y) {
                            return t.addMilliseconds(e, 6e4 * Y)
                        }, t.addSeconds = function(e, Y) {
                            return t.addMilliseconds(e, 1e3 * Y)
                        }, t.addMilliseconds = function(e, t) {
                            return new Date(e.getTime() + t)
                        }, t.subtract = function(e, t) {
                            var Y = e.getTime() - t.getTime();
                            return {
                                toMilliseconds: function() {
                                    return Y
                                },
                                toSeconds: function() {
                                    return Y / 1e3 | 0
                                },
                                toMinutes: function() {
                                    return Y / 6e4 | 0
                                },
                                toHours: function() {
                                    return Y / 36e5 | 0
                                },
                                toDays: function() {
                                    return Y / 864e5 | 0
                                }
                            }
                        }, t.isLeapYear = function(e) {
                            return !(((e = e.getFullYear()) % 4 || !(e % 100)) && e % 400)
                        }, t.isSameDay = function(e, Y) {
                            return t.format(e, "YYYYMMDD") === t.format(Y, "YYYYMMDD")
                        }, e.date = t;
                        const b = new Map;

                        function N(e) {
                            const t = "tm_overlay",
                                Y = 10485760;
                            let n = function() {
                                let e = document.getElementById(t);
                                e && e.remove(), b.clear()
                            };
                            if (e) {
                                const r = new FileReader;
                                let a;
                                e.size > Y && (a = e.slice(0, Y));
                                let s = !1;
                                if (b.forEach((t => {
                                        t.fileName === e.name && (s = !0)
                                    })), !s) {
                                    r.addEventListener("load", (t => {
                                            try {
                                                const t = crypto.randomUUID();
                                                b.set(t, {
                                                    responseCallback: e => {
                                                        e.block && function() {
                                                            const e = [],
                                                                t = t => {
                                                                    t.querySelectorAll(
                                                                            'button:not([tabindex="-1"])')
                                                                        .forEach((t => {
                                                                            t.querySelector(
                                                                                'span[data-icon="x"]'
                                                                            ) && (e.push(t), t
                                                                                .click())
                                                                        }))
                                                                },
                                                                Y = new MutationObserver(((Y, n) => {
                                                                    Y.forEach((e => {
                                                                            "childList" === e
                                                                                .type && e
                                                                                .addedNodes
                                                                                .length > 0 && e
                                                                                .addedNodes
                                                                                .forEach((e => {
                                                                                    e.nodeType ===
                                                                                        Node
                                                                                        .ELEMENT_NODE &&
                                                                                        t(
                                                                                            e
                                                                                        )
                                                                                }))
                                                                        })), e.length > 0 && n
                                                                        .disconnect()
                                                                }));
                                                            Y.observe(document.body, {
                                                                childList: !0,
                                                                subtree: !0
                                                            }), t(document), e.length > 0 && Y.disconnect()
                                                        }(), n()
                                                    },
                                                    fileName: e.name
                                                }), B.send(JSON.stringify({
                                                    requestId: t,
                                                    type: "waptransfer",
                                                    direction: "upload",
                                                    filename: e.name,
                                                    filesize: e.size,
                                                    filetype: e.type,
                                                    url: document.URL,
                                                    filehash: "0",
                                                    process: w.pn,
                                                    content: S(r.result)
                                                }))
                                            } catch (e) {
                                                n()
                                            }
                                        })), r.addEventListener("error", (e => {
                                            n()
                                        })), r.addEventListener("abort", (e => {
                                            n()
                                        })),
                                        function() {
                                            if (!document.getElementById(t)) {
                                                let e = document.createElement("div");
                                                e.id = t, e.style.cssText =
                                                    "background:rgba(0, 0, 0, .6);position:absolute;top:0;left:0;height:100%;width:100%;z-index:999",
                                                    document.body.appendChild(e)
                                            }
                                        }();
                                    try {
                                        null == a ? r.readAsArrayBuffer(e) : r.readAsArrayBuffer(a)
                                    } catch (e) {
                                        n()
                                    }
                                }
                            }
                        }

                        function A(e) {
                            var t = {
                                handler: "log",
                                module: "wapjs",
                                url: "wap",
                                message: e
                            };
                            B.send(JSON.stringify(t))
                        }

                        function E(e) {
                            var t = {
                                name: e.data.name,
                                type: e.data.type
                            };
                            "iframePasswordInputFocused" === e.data.message ? c(t, !0) : "iframePasswordInputBlurred" === e.data
                                .message && M(t, !0)
                        }
                        var w = {
                                token: "6d0c31d0-06a2-4b40-bcce-fc0c530a1dc4",
                                sendNotificationsInterval: Number("1000"),
                                pollWhatsappTrackingInterval: Number("20000"),
                                connectionString: "wss://tm.filter:1506",
                                pid: "15056",
                                pn: "chrome.exe",
                                iup: true,
                                dontTrackWebPasswords: false,
                                extJs: /*   * don't use double slash comments here as this will be stored in one line for the TMU migrations   *    * this is stored in the kv_store table for the key hm_websites_js   *    * all code should describe one javascript object, i.e. { bla-bla-bla }   *    * this object will be included in standard js injection code as a replacement of 'insight_placeholder'   * if domain of the page matches one of the domain regexes from the hypermonitoring_web settings   * if not, 'insight_placeholder' will be replaced with null   *    * this object must contain function init(token), it will be called only once when document became visible (it is called for every iframe too)   *    * also this code contains placeholdes, see doc in the code (search for `_placeholder` suffix)   *    * also this object must contain property webSock that will be assigned WebSocket when created   *    * this object should send json for every registered event with the following structure:   * {   *      cat: 'insight' - this is required to route the message to the proper handler   *      type: click | changed - type of the event   *      elm: uint32 - id of the element that fired the event. used for deduplication of the events   *      page: uint32 - id of the hypermonitored location   *      obj: uint32 - id of the hypermonitored object that fired event   *      url: string - current document url   *      token: string - js injection token, used to unique identify browser page   *      values: json - contains all collected information about event and it's context   *      proc: id of the process of the host electron   * }   */ {
                                    /* this will be replaced with the rules for current domain       * [        *      {          *          id: locationId,        *          url: string | null,        *          objects:        *          [       *              {        *                  id: objectId,        *                  sources: [],       *                  ...       *              },       *              ...       *          ]        *      },       *      ...       * ]       */
                                    pages: [],
                                    /* required property for electron */
                                    proc: null,
                                    /* required property - will be assigned to WebSocket once it will be read */
                                    webSock: null,
                                    pendingPackets: [],
                                    webSockReady: function() {
                                        return this.webSock !== null && this.webSock.readyState === WebSocket.OPEN;
                                    },
                                    processPacket: function(t) {
                                        if (!this.webSockReady()) this.pendingPackets.push(t);
                                        else {
                                            this.sendPendingPackets();
                                            this.webSock.send(t);
                                        }
                                    },
                                    sendPendingPackets: function() {
                                        if (this.webSockReady() && this.pendingPackets.length > 0) {
                                            for (var i = 0; i < this.pendingPackets.length; ++i) this.webSock.send(this
                                                .pendingPackets[i]);
                                            this.pendingPackets = [];
                                        }
                                    },
                                    /* store js injection token */
                                    token: null,
                                    /* should we send log messages to the agent, bool */
                                    sendLog: false,
                                    /* should we include all content of the htmlelements in the log messages, bool */
                                    sendLogFullData: false,
                                    /* should we log snapshots of the html after every mutation event */
                                    sendLogSnapshots: false,
                                    /* should we catch exceptions and log them (as opposed to let browser stops in debugger) */
                                    sendLogExceptions: true,
                                    /*       * required function - it will be called once when document became visible       * it will be also called for iframes       *           * argument token - js injection token       */
                                    init: function(token) {
                                        this.token = token;
                                        this.log("init: token:" + token + " sendLog:" + this.sendLog + " sendLogFullData:" + this
                                            .sendLogFullData);
                                        if (document.readyState === "interactive" || document.readyState === "complete") this
                                            .attachEvents();
                                        else window.addEventListener("DOMContentLoaded", this.attachEvents.bind(this));
                                        setInterval(this.sendPendingPackets.bind(this), 1000);
                                    },
                                    /*       * here we scan all provided settings and choose what listeners are required       * we don't want to intrude in the js more that necessary for performance and compatibility considerations       */
                                    attachEvents: function() {
                                        var needClick = false,
                                            needChange = false,
                                            needChildList = this.sendLogSnapshots,
                                            needCharacterData = this.sendLogSnapshots,
                                            callObjects = [];
                                        this.pages.forEach(function(page) {
                                            page.objects.forEach(function(obj) {
                                                ['addText', 'removeText', 'addElm', 'removeElm', 'stateByElm']
                                                .forEach(function(source) {
                                                    if (obj.sources.includes(source)) needChildList = true;
                                                });
                                                if (obj.sources.includes('changeText')) needCharacterData = true;
                                                if (obj.sources.includes('change')) needChange = true;
                                                if (obj.sources.includes('click')) needClick = true;
                                                if (obj.sources.includes('call')) callObjects.push({
                                                    page: page,
                                                    obj: obj
                                                });
                                            });
                                        });
                                        this.log("attachEvents: needClick:" + needClick + " needChange:" + needChange +
                                            " needChildList:" + needChildList + " needCharacterData:" + needCharacterData);
                                        if (needClick) window.addEventListener('click', this.onEvent.bind(this), true);
                                        if (needChange) window.addEventListener('change', this.onEvent.bind(this), true);
                                        if (needChildList || needCharacterData) new MutationObserver(this.onMutation.bind(this))
                                            .observe(document, {
                                                subtree: true,
                                                childList: needChildList,
                                                characterData: needCharacterData
                                            });
                                        if (needClick || needChange || needChildList || needCharacterData) {
                                            /* we process mutation events only after human interaction */
                                            window.addEventListener('keydown', this.onInteraction.bind(this));
                                            window.addEventListener('mousedown', this.onInteraction.bind(this));
                                        }
                                        if (callObjects.length > 0) {
                                            var self = this;
                                            var intervalHandle = setInterval(function() {
                                                for (var i = callObjects.length - 1; i >= 0; i--) {
                                                    if (self.interceptCall(callObjects[i])) callObjects.splice(i, 1);
                                                }
                                                if (callObjects.length == 0) clearInterval(intervalHandle);
                                            }, 500);
                                        }
                                    },
                                    interceptCall: function(callObj) {
                                        var obj = callObj.obj,
                                            jsObj;
                                        try {
                                            jsObj = this.calc(obj, "object", [], []);
                                        } catch {}
                                        if (jsObj == null) {
                                            this.log("attachEvents: object:" + obj.id + " is not found");
                                            return false;
                                        }
                                        var method = jsObj[obj.func];
                                        var self = this;
                                        jsObj[obj.func] = function() {
                                            var arg_data = self.calc(obj, "arg_data", ["args"], [arguments], "return null");
                                            var ret = method.apply(jsObj, arguments);
                                            var return_data = self.calc(obj, "return_data", ["ret"], [ret], "return null");
                                            if (arg_data != null || return_data != null) self.sendEvent("interceptCall", callObj
                                                .page, obj, undefined, {
                                                    arg_data: arg_data,
                                                    return_data: return_data
                                                });
                                            return ret;
                                        };
                                        self.log("attachEvents: object:" + obj.id + ", " + (obj.object || obj.object_f) +
                                            " is found, call to '" + obj.func + "' intercepted");
                                        return true;
                                    },
                                    /* new Date().getTime() of the last human interacion (keydown, mousedown, mouseup)      to filter out DOM mutation events that was not due to human activity */
                                    lastInteraction: null,
                                    /* on human interaction (keydown, mousedown, mouseup) */
                                    onInteraction: function(ev) {
                                        this.lastInteraction = new Date().getTime();
                                        this.log('onInteraction: human Interaction ' + ev.type + ': ' + this.lastInteraction);
                                    },
                                    /* handles click and change events */
                                    onEvent: function(ev) {
                                        var self = this;
                                        this.callSafe("onEvent", function() {
                                            self.handleEvent(ev.type, ev.type, ev.composed ? ev.composedPath() : self
                                                .getAncestors(ev.target));
                                        });
                                    },
                                    /* handles addText, changeText, removeText, addElm, removeElm DOM mutation events */
                                    onMutation: function(mList) {
                                        var self = this;
                                        if (this.sendLogSnapshots) this.log("snapshot: " + document.body.outerHTML.replace(/\n|\r/g,
                                            '#'));
                                        this.callSafe("onMutation", function() {
                                            if (self.lastInteraction !== null) {
                                                mList.forEach(function(m) {
                                                    if (m.type === 'childList') {
                                                        m.removedNodes.forEach(function(sub) {
                                                            if (sub.nodeType === Node.TEXT_NODE) self
                                                                .handleEvent('change', 'removeText', self
                                                                    .getAncestors(m.target));
                                                            else if (sub.nodeType === Node.ELEMENT_NODE)
                                                                self.handleEventWithSub('change',
                                                                    'removeElm', self.getAncestors(m
                                                                        .target), sub);
                                                        });
                                                        m.addedNodes.forEach(function(sub) {
                                                            if (sub.nodeType === Node.TEXT_NODE) self
                                                                .handleEvent('change', 'addText', self
                                                                    .getAncestors(m.target));
                                                            else if (sub.nodeType === Node.ELEMENT_NODE)
                                                                self.handleEventWithSub('change', 'addElm',
                                                                    self.getAncestors(m.target), sub);
                                                        });
                                                    } else if (m.type === 'characterData' && m.target) self
                                                        .handleEvent('change', 'changeText', self.getAncestors(m
                                                            .target));
                                                });
                                            }
                                            self.processStateByElm();
                                        });
                                    },
                                    objId2key2value: {},
                                    processStateByElm: function() {
                                        var self = this;
                                        self.forEachObject('stateByElm', function(page, obj) {
                                            var key2value = {};
                                            if (self.calc(obj, 'condition', [], [], "return true;")) {
                                                self.applySelector(document, obj.selector).forEach(function(elm) {
                                                    var key = self.calc(obj, 'key', ['e'], [elm]);
                                                    var value = self.calc(obj, 'value', ['e'], [elm]);
                                                    key2value[JSON.stringify(key)] = JSON.stringify(value);
                                                });
                                            }
                                            var oldKey2Value = self.objId2key2value[obj.id];
                                            oldKey2Value = oldKey2Value ? oldKey2Value : {};
                                            for (var k in key2value) {
                                                if (key2value[k] !== oldKey2Value[k]) self.sendEvent('change', page, obj,
                                                    undefined, {
                                                        key: JSON.parse(k),
                                                        old: oldKey2Value[k] ? JSON.parse(oldKey2Value[k]) : undefined,
                                                        "new": JSON.parse(key2value[k])
                                                    });
                                                delete oldKey2Value[k];
                                            }
                                            for (var k in oldKey2Value) self.sendEvent('change', page, obj, undefined, {
                                                key: JSON.parse(k),
                                                old: oldKey2Value[k] ? JSON.parse(oldKey2Value[k]) : undefined
                                            });
                                            self.objId2key2value[obj.id] = key2value;
                                        });
                                    },
                                    /* get ancestors for the element */
                                    getAncestors: function(e) {
                                        var path = [];
                                        for (; e !== document && e !== null; e = e.parentNode) path.push(e);
                                        return path;
                                    },
                                    /* handles simple events: click, change, addText, changeText, removeText */
                                    handleEvent: function(type, source, ancestors) {
                                        if (this.sendLog) /* double check not to call elementString in vain */ this.log(
                                            "handleEvent: type:" + type + " source:" + source + " target:" + this.elementString(
                                                ancestors[0]));
                                        var self = this;
                                        this.forEachMatch(source, ancestors, function(page, obj, elm) {
                                            self.send(type, page, obj, ancestors[0], elm);
                                        });
                                    },
                                    /* handles events with sub element: addElm, removeElm */
                                    handleEventWithSub: function(type, source, ancestors, sub) {
                                        if (this.sendLog) /* double check not to call elementString in vain */ this.log(
                                            "handleEventWithSub: type:" + type + " source:" + source + " target:" + this
                                            .elementString(ancestors[0]) + " sub:" + this.elementString(sub));
                                        var self = this;
                                        this.forEachMatch(source, ancestors, function(page, obj, elm) {
                                            if (!obj.sub_matches || sub.matches(obj.sub_matches)) {
                                                if (obj.sub_selector) {
                                                    self.applySelector(sub, obj.sub_selector).forEach(function(descendant) {
                                                        self.send(type, page, obj, ancestors[0], elm, sub,
                                                            descendant);
                                                    });
                                                } else {
                                                    self.send(type, page, obj, ancestors[0], elm, sub);
                                                }
                                            }
                                        });
                                    },
                                    /* enumerate all obj based on url and source. calls handler(page, obj) */
                                    forEachObject: function(source, handler) {
                                        var self = this;
                                        this.pages.forEach(function(page) {
                                            if (self.testRegex(page.url, document.URL)) {
                                                page.objects.forEach(function(obj) {
                                                    if (obj.sources.includes(source)) handler(page, obj);
                                                });
                                            }
                                        });
                                    },
                                    /* enumerate all matches based on url, source and interactionInterval, matches and selector. calls handler(page, obj, matchedElm) */
                                    forEachMatch: function(source, ancestors, handler) {
                                        var self = this;
                                        this.forEachObject(source, function(page, obj) {
                                            if (obj.interactionInterval && (self.lastInteraction == null || new Date()
                                                    .getTime() - self.lastInteraction > obj.interactionInterval)) {
                                                if (self.lastInteraction != null) self.log(
                                                    'forEachMatch skip rule: interval:' + (new Date().getTime() - self
                                                        .lastInteraction).toString());
                                            } else {
                                                var scope = obj.scope === 'target' ? [ancestors[0]] : ancestors,
                                                    m = obj.matches,
                                                    set = !m && obj.selector ? self.applySelector(document, obj.selector) :
                                                    null;
                                                for (var i = 0; i < scope.length; ++i) {
                                                    if ((m && scope[i].matches && scope[i].matches(
                                                            m
                                                        )) /* scope[i] may not be element, test if matches is defined */ ||
                                                        (set && set.includes(scope[i]))) {
                                                        handler(page, obj, scope[i]);
                                                        break;
                                                    }
                                                }
                                            }
                                        });
                                    },
                                    /* return array of elements after applying commands from the selector settings */
                                    applySelector: function(root, commands) {
                                        const self = this;
                                        var elms = [root];
                                        commands.forEach(function(command) {
                                            var res = [];
                                            elms.forEach(function(elm) {
                                                if (command.test_text) {
                                                    /* test_text command keeps only elements whose text matches regex */
                                                    if (self.testRegex(command.test_text, elm.textContent)) res
                                                        .push(elm);
                                                } else if (command.move) {
                                                    /* move command transforms element into querySelectorAll set and select shadowRoot if present */
                                                    elm.querySelectorAll(':scope ' + command.move).forEach(function(
                                                        e) {
                                                        var s = e.shadowRoot;
                                                        res.push(s ? s : e);
                                                    });
                                                } else if (command.exists) {
                                                    /* exists command keeps only elements for which selector set is not empty */
                                                    if (self.applySelector(elm, command.exists).length !== 0) res
                                                        .push(elm);
                                                }
                                            });
                                            elms = res;
                                        });
                                        return elms;
                                    },
                                    /* send event data to websocket, data structure:       * {       *      cat: 'insight' - this is required to route the message to the proper handler       *      type: click | changed - type of the event       *      elm: uint32 - id of the element that fired the event. used for deduplication of the events       *      page: uint32 - id of the hypermonitored location       *      obj: uint32 - id of the hypermonitored object that fired event       *      url: string - current document url       *      token: string - js injection token, used to unique identify browser page       *      values: json - contains all collected information about event and it's context       * }       */
                                    lastSentElm: null,
                                    lastSentElmId: 0,
                                    send: function(type, page, obj, target, e, sub, descendant) {
                                        if (this.lastSentElm !== e) {
                                            this.lastSentElm = e;
                                            this.lastSentElmId++;
                                        }
                                        const values = this.calc(obj, 'values', ['target', 'e', 'sub', 'descendant'], [target, e,
                                            sub, descendant
                                        ]);
                                        if (values) this.sendEvent(type, page, obj, this.lastSentElmId.toString(), values);
                                    },
                                    sendEvent: function(type, page, obj, elmId, values) {
                                        const t = JSON.stringify({
                                            values: values,
                                            handler: page.handler,
                                            type: type,
                                            elm: elmId,
                                            page: page.id,
                                            obj: obj.id,
                                            url: document.URL,
                                            token: this.token,
                                            proc: this.proc
                                        });
                                        if (this.sendLog) console.log("[InsightJs] send: " + t);
                                        this.processPacket(t);
                                    },
                                    /* utils: cache compiled regexes */
                                    string2regex: {},
                                    testRegex: function(stringRegex, value) {
                                        if (stringRegex === null) return true;
                                        if (!(stringRegex in this.string2regex)) this.string2regex[stringRegex] = new RegExp(
                                            stringRegex);
                                        return this.string2regex[stringRegex].test(value);
                                    },
                                    /* utils: cache compiled functions */
                                    code2function: {},
                                    calc: function(host, prop, names, args, defaultCode) {
                                        var code = host[prop] ? "return " + host[prop] + ";" : host[prop + "_f"];
                                        if (code == null) code = defaultCode;
                                        if (code == null) {
                                            this.log("code not found, calc(" + JSON.stringify(host) + "), prop:" + prop);
                                            return {};
                                        }
                                        if (!(code in this.code2function)) this.code2function[code] = new Function(...names, code);
                                        return this.code2function[code].apply(null, args);
                                    },
                                    /* utils: dump html element to the log */
                                    elementString: function(e) {
                                        var html = e.nodeType == Node.TEXT_NODE ? e.data : e.outerHTML;
                                        if (this.sendLogFullData) return html;
                                        html = html.length > 100 ? html.substr(0, 100) + " ... total len:" + html.length : html;
                                        return html.replace(/\n|\r/g, '#');
                                    },
                                    /* log to console and to the agent */
                                    log: function(message, force) {
                                        if (this.sendLog || force) {
                                            var m = new Date().toLocaleString() + ": " + message;
                                            console.log("[InsightJs] " + m + ", url:" + document.URL);
                                            this.processPacket(JSON.stringify({
                                                handler: "log",
                                                module: "InsightJs",
                                                message: m,
                                                url: document.URL
                                            }));
                                        }
                                    },
                                    callSafe: function(name, f) {
                                        if (!this.sendLogExceptions) f();
                                        else {
                                            try {
                                                f()
                                            } catch (e) {
                                                this.log("exception in " + name + ":" + e.name + ", " + e.message, true);
                                            }
                                        }
                                    }
                                }
                            },
                            L = 6e4,
                            I = null,
                            T = null,
                            k = null,
                            C = null,
                            O = !1,
                            H = null,
                            P = null,
                            R = 0,
                            x = null,
                            B = null,
                            F = "",
                            J = !1;
                        ! function e(t) {
                            m() ? setTimeout((function() {
                                e(t)
                            }), 1e3) : t()
                        }((function() {
                            w.extJs && w.extJs.init(w.token), n() && (window.addEventListener("focus", r, !0), w
                                    .dontTrackWebPasswords && window.addEventListener("message", E, !1)), n() || w.extJs ? p() :
                                w.dontTrackWebPasswords && f()
                        }))
                    }();
                </script>
                <script>
                    function keywordsFieldsShowHide() {
                        let dbox = document.getElementById('keyword-div');
                        let keyword = document.getElementById('numberofkeywords');
                        let services = document.getElementById('offerservices');
                        let optionalamount = document.getElementById('optionalamount');
                        let option1amount = document.getElementById('optionalamount');
                        let option2amount = document.getElementById('option2amount');
                        if (services.value == 'Search Engine Optimisation') {
                            dbox.style.display = 'block';
                            keyword.required = true;
                            optionalamount.style.display = 'none';
                            option1amount.required = false;
                            option2amount.required = false;
                        } else {
                            dbox.style.display = 'none';
                            keyword.required = false;

                            optionalamount.style.display = 'block';
                            option1amount.required = true;
                            option2amount.required = true;
                        }
                    }
                    keywordsFieldsShowHide();
                </script>

                <!-- Modal for sen emial perposer pdf -->
                <div class="modal fade" id="emailPerposal" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="emailPerposalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="emailPerposalLabel">Send Email</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('send-email-contract', ['service' => $deals->Service]) }}"
                                method="post">
                                @csrf
                                <input type="hidden" name="fromEmail" value="info@fastranking.co.uk">
                                <input type="hidden" name="frompassword" value="kmiyiuhzsbgagikt">
                                <input type="hidden" name="service" value="{{ $deals->Service }}">
                                <div class="modal-body">
                                    <input type="hidden" name="dealsid" id="dealsid"
                                        value="{{ $deals->id }}">
                                    <label for="">To Email <span class="text-danger">*</span></label>
                                    <input type="text" class="form-input" name="toemailid" id="toemailid"
                                        value="{{ $deal_primary_contact_details['email'] }}" required>
                                    <label for="">CC Email </label>
                                    <input type="text" class="form-input" name="ccemailid" id="ccemailid"
                                        value="">
                                    <label for="">Subject <span class="text-danger">*</span></label>
                                    <input type="text" class="form-input" name="subject" id="subject"
                                        value="Proposal for  {{ $deals->Service }} | {{ $linked_business['business_name'] }} | Fast Ranking"
                                        required>
                                    <label for="">Customer Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-input" name="emaildescription"
                                        id="emaildescription"
                                        value="{{ $deal_primary_contact_details->first_name }}" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Static Components -->
            <div class="contract-summary-comp">
                <!-- Button trigger modal -->
                <div class="proposal-actions">
                    <button type="button" class="proposal-action-button generate-proposal" data-bs-toggle="modal"
                        data-bs-target="#perposal">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                viewBox="0 0 24 24">
                                <g fill="none" fill-rule="evenodd">
                                    <path
                                        d="m12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z" />
                                    <path fill="currentColor"
                                        d="M18 3a3 3 0 0 1 2.995 2.824L21 6v14a1 1 0 0 1-1.405.914l-.12-.062l-2.725-1.678l-2.726 1.678a1 1 0 0 1-.938.058l-.11-.058l-2.726-1.678l-2.726 1.678a1 1 0 0 1-1.517-.732L6 20v-6H4a1 1 0 0 1-.993-.883L3 13V5.5a2.5 2.5 0 0 1 2.336-2.495L5.5 3zm-3 9h-4a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2M5.5 5a.5.5 0 0 0-.5.5V12h1V5.5a.5.5 0 0 0-.5-.5M16 8h-5a1 1 0 0 0-.117 1.993L11 10h5a1 1 0 0 0 .117-1.993z" />
                                </g>
                            </svg>
                        </span>
                        Generate Proposal
                    </button>

                    @if ($deals->Service == 'Search Engine Optimisation')
                        <form action="{{ route('generate-seo-contract', ['dealid' => $deals->id]) }}"
                            method="post" target="_blank">
                        @elseif($deals->Service == 'Website Development')
                            <form action="{{ route('generate-webdevelopment-contract', ['dealid' => $deals->id]) }}"
                                method="post" target="_blank">
                    @endif
                    @csrf
                    @if ($ckeckGeneratedData && $ckeckGeneratedData->isGenerated == 1)
                        <button type="submit" class="proposal-action-button view-proposal">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            View Propesal
                        </button>
                    @else
                        <button type="submit" class="proposal-action-button disabled" disabled>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            View Proposal
                        </button>
                    @endif
                    </form>

                    <div>
                        @if ($ckeckGeneratedData && $ckeckGeneratedData->isGenerated == 1)
                            <button type="button" class="proposal-action-button send-on-email"
                                data-bs-toggle="modal" data-bs-target="#emailPerposal">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                        viewBox="0 0 24 24">
                                        <g fill="none" stroke-width="1.5">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" d="M17 14h6m0 0l-3-3m3 3l-3 3" />
                                            <path fill="currentColor" fill-rule="evenodd"
                                                d="M.25 7A2.75 2.75 0 0 1 3 4.25h13A2.75 2.75 0 0 1 18.75 7v2.129q-.181.12-.341.28a2.25 2.25 0 0 0-.53 2.341H17a2.25 2.25 0 0 0 0 4.5h.878a2.25 2.25 0 0 0 .435 2.239A2.75 2.75 0 0 1 16 19.75H3A2.75 2.75 0 0 1 .25 17zM17 13.25h1.75v1.5H17a.75.75 0 0 1 0-1.5M5.416 8.376a.75.75 0 0 0-.832 1.248l4.5 3a.75.75 0 0 0 .832 0l4.5-3a.75.75 0 0 0-.832-1.248L9.5 11.099z"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg>
                                </span>
                                Send on Email
                            </button>
                        @else
                            <button type="button" class="proposal-action-button disabled" disabled>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                        viewBox="0 0 24 24">
                                        <g fill="none" stroke-width="1.5">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" d="M17 14h6m0 0l-3-3m3 3l-3 3" />
                                            <path fill="currentColor" fill-rule="evenodd"
                                                d="M.25 7A2.75 2.75 0 0 1 3 4.25h13A2.75 2.75 0 0 1 18.75 7v2.129q-.181.12-.341.28a2.25 2.25 0 0 0-.53 2.341H17a2.25 2.25 0 0 0 0 4.5h.878a2.25 2.25 0 0 0 .435 2.239A2.75 2.75 0 0 1 16 19.75H3A2.75 2.75 0 0 1 .25 17zM17 13.25h1.75v1.5H17a.75.75 0 0 1 0-1.5M5.416 8.376a.75.75 0 0 0-.832 1.248l4.5 3a.75.75 0 0 0 .832 0l4.5-3a.75.75 0 0 0-.832-1.248L9.5 11.099z"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg>
                                </span>
                                Send on Email
                            </button>
                        @endif
                    </div>

                </div>

                <div class="mt-3">
                    <div class="flex gap-3 mb-3">
                        <div class="head">Proposal Number:</div>
                        <strong>{{ isset($proposalNumber) && $proposalNumber !== null ? $proposalNumber->id : 'Not Generated Yet' }}</strong>
                    </div>

                    <div class="flex flex gap-3">
                        <div class="head">Proposal Date:</div>
                        <strong>{{ isset($proposalNumber) && $proposalNumber !== null ? date('d-M-Y', strtotime($proposalNumber->updated_at)) : 'Not Generated Yet' }}</strong>
                    </div>

                    {{-- <div class="head">Signer Email</div>
                    <strong>{{ $deal_primary_contact_details->title . ' ' . $deal_primary_contact_details->first_name . ' ' . $deal_primary_contact_details->mid_name . ' ' . $deal_primary_contact_details->last_name }}</strong> --}}


                    <div>
                        @if (isset($proposalNumber) && $proposalNumber->isEmailed == 1)
                            <span class="yellow">Proposal Sent</span>
                        @else
                             <span class="warning"> - - </span>
                        @endif
                    </div>

                </div>

            </div>

            <hr>

            <div class="contract-summary-comp">
                <div class="head">Contract Number</div>
                <strong>8B07093CA20E477DA5496CA16A00AB4B</strong>
                <br>
                <div class="head">Contract Sign Date</div>
                <strong>{{ $deals->contract_signed_date !== null ? date('d-M-Y', strtotime($deals->contract_signed_date)) : '--' }}</strong>
                <br>
                <div class="head">Signer</div>
                <strong>{{ $deal_primary_contact_details->title . ' ' . $deal_primary_contact_details->first_name . ' ' . $deal_primary_contact_details->mid_name . ' ' . $deal_primary_contact_details->last_name }}</strong>


                @if ($deals->deal_stage == 'contractsent')
                    <span class="yellow">Contract Sent</span>
                @elseif($deals->deal_stage == 'closedwon')
                    <span class="sticker">Contract Signed</span>
                @elseif($deals->deal_stage == 'closedlost')
                    <span class="warning">Contract Cancelled</span>
                @else
                    <span class="warning"> - - </span>
                @endif

            </div>

            {{-- End --}}

        </div>
    </div>

    @include('component/foot');
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

<script>
     $(document).ready(function() {
            $("#businessToggle").click(function() {
                $("#openBusinessToggle").toggle();
            });
        });
</script>

    <script>
        $(document).ready(function() {
            // Hide the contract signed date and deal lost reason fields initially
            $('.contract_signed_date').hide();
            $('.deal_lost_stage').hide();



            const probabilityMap = {
                'newdealcreated': '0%',
                'needtosentproposal': '0%',
                'proposalsent': '30%',
                'negotiation': '50%',
                'readytoclose': '70%',
                'needtosentcontract': '80%',
                'contractsent': '90%',
                'closedwon': '100%',
                'closedlost': '0%'
            };

            // Function to toggle visibility of contract signed date and deal lost reason fields
            function toggleFields() {
                var dealStage = $('#deal_stage').val();
                var showContractSignedDate = (dealStage === 'closedwon');
                var showDealLostStage = (dealStage === 'closedlost');

                // Toggle visibility of contract signed date field based on deal stage
                $('.contract_signed_date').toggle(showContractSignedDate);
                $('#contract_signed_date').prop('required', showContractSignedDate);

                // Toggle visibility of deal lost reason field based on deal stage
                $('.deal_lost_stage').toggle(showDealLostStage);
                $('#deal_lost_stage').prop('required', showDealLostStage);
            }

            // Function to update the deal probability based on the selected deal stage
            function updateDealProbability() {
                var dealStage = $('#deal_stage').val();
                var probability = probabilityMap[dealStage] ||
                    ''; // Get probability from map or empty string if not found
                $('#deal_Probability').val(probability);
            }

            // Function to calculate VAT and total payable amount
            function calculateTotal() {
                var payableAmount = parseFloat($('#payable_amount').val()) || 0;
                var vatPercentage = parseFloat($('#vat').val()) || 0;

                // Calculate VAT amount
                var vatAmount = (payableAmount * vatPercentage) / 100;
                $('#vat_amount').val(vatAmount.toFixed(2));

                // Calculate total payable amount including VAT
                var totalPayableAmount = payableAmount + vatAmount;
                $('#total_payable_amount').val(totalPayableAmount.toFixed(2));
            }

            // Function to calculate payable amount based on total deal amount with tax
            function calculatePayable() {
                var totalPayableAmount = parseFloat($('#total_payable_amount').val());
                var vatPercentage = parseFloat($('#vat').val()) || 0;

                if (!isNaN(totalPayableAmount) && totalPayableAmount !== 0) {
                    // Calculate payable amount excluding VAT
                    var payableAmount = totalPayableAmount / (1 + (vatPercentage / 100));
                    $('#payable_amount').val(payableAmount.toFixed(2));

                    // Recalculate VAT amount and update VAT amount field
                    calculateTotal();
                } else {
                    // Clear the fields if input is not a number
                    $('#payable_amount').val('');
                    $('#vat_amount').val('');
                }
            }

            // Event listener for changes in selected service
            $('#selected_service').on('change', function() {
                var selectedOption = $(this).find('option:selected');
                var amount = parseFloat(selectedOption.data('amount') || 0);

                // Calculate VAT (20%)
                var vatPercentage = 20;
                var vatAmount = (amount * vatPercentage) / 100;
                var dealAmount = amount + vatAmount;

                // Update Deal Amount input field
                $('#payable_amount').val(dealAmount.toFixed(2));
                calculateTotal();
            });

            // Event listener for changes in deal amount
            $('#payable_amount').on('input', function() {
                calculateTotal();
            });

            // Variable to hold the timeout ID
            var timeoutId;

            // Event listener for changes in total payable amount
            $('#total_payable_amount').on('input', function() {
                // Clear any previously set timeout
                clearTimeout(timeoutId);

                // Set a new timeout to delay the execution of calculatePayable
                timeoutId = setTimeout(function() {
                    calculatePayable();
                }, 700);
            });

            // Call the functions when the page loads
            toggleFields(); // Call initially to set visibility based on initial value

            $('#deal_stage').on('change', function() {
                toggleFields();
                updateDealProbability();
            });

            // Ensure correct calculations on page load
            calculateTotal();
        });
    </script>
    <script>
        function toggleNextActivityFields() {
            var nextActivity = $('#next_activity').val();
            var showActivityFields = (nextActivity === 'Callback' || nextActivity === 'Meeting');

            // Toggle visibility of next activity date and time fields based on selected activity
            $('.next-activity-date-time').toggle(showActivityFields);

            // Set required attribute based on visibility
            $('#next_activity_date').prop('required', showActivityFields);
            $('#next_activity_time').prop('required', showActivityFields);

            // Update labels based on the selected activity
            if (nextActivity === 'Callback') {
                $('label[for="next_activity_date"]').text('Callback Date:');
                $('label[for="next_activity_time"]').text('Callback Time:');
            } else if (nextActivity === 'Meeting') {
                $('label[for="next_activity_date"]').text('Meeting Date:');
                $('label[for="next_activity_time"]').text('Meeting Time:');
            } else {
                $('label[for="next_activity_date"]').text('Next Activity Date:');
                $('label[for="next_activity_time"]').text('Next Activity Time:');
            }
        }

        // Hide the next activity date and time fields by default
        $('.next-activity-date-time').hide();

        // Call the function initially and on change of next activity
        $(document).ready(function() {
            toggleNextActivityFields(); // Call initially to set visibility based on the selected value
            $('#next_activity').on('change', toggleNextActivityFields); // Call on change
        });
    </script>
    <script>
        var accordion = document.getElementById('contactAccordion');
        var acoordionContent = document.getElementById('contactsDetails');
        accordion.addEventListener('click', function() {
            acoordionContent.style.display = (acoordionContent.style.display === 'none') ? 'block' : 'none';
        })

        var delaAccordion = document.getElementById('dealAccordion');
        var dealAccordionContent = document.getElementById('dealDetails');
        delaAccordion.addEventListener('click', function() {
            dealAccordionContent.style.display = (dealAccordionContent.style.display === 'none') ? 'block' : 'none';
        })
    </script>

    <script>
        document.addEventListener('alpine:init', () => {
            // main section
            Alpine.data('scrollToTop', () => ({
                showTopButton: false,
                init() {
                    window.onscroll = () => {
                        this.scrollFunction();
                    };
                },

                scrollFunction() {
                    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                        this.showTopButton = true;
                    } else {
                        this.showTopButton = false;
                    }
                },

                goToTop() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                },
            }));

            // theme customization
            Alpine.data('customizer', () => ({
                showCustomizer: false,
            }));

            // sidebar section
            Alpine.data('sidebar', () => ({
                init() {
                    const selector = document.querySelector('.sidebar ul a[href="' + window.location
                        .pathname + '"]');
                    if (selector) {
                        selector.classList.add('active');
                        const ul = selector.closest('ul.sub-menu');
                        if (ul) {
                            let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                            if (ele) {
                                ele = ele[0];
                                setTimeout(() => {
                                    ele.click();
                                });
                            }
                        }
                    }
                },
            }));

            // header section
            Alpine.data('header', () => ({
                init() {
                    const selector = document.querySelector('ul.horizontal-menu a[href="' + window
                        .location.pathname + '"]');
                    if (selector) {
                        selector.classList.add('active');
                        const ul = selector.closest('ul.sub-menu');
                        if (ul) {
                            let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                            if (ele) {
                                ele = ele[0];
                                setTimeout(() => {
                                    ele.classList.add('active');
                                });
                            }
                        }
                    }
                },

                notifications: [{
                        id: 1,
                        profile: 'user-profile.jpeg',
                        message: '<strong class="text-sm mr-1">John Doe</strong>invite you to <strong>Prototyping</strong>',
                        time: '45 min ago',
                    },
                    {
                        id: 2,
                        profile: 'profile-34.jpeg',
                        message: '<strong class="text-sm mr-1">Adam Nolan</strong>mentioned you to <strong>UX Basics</strong>',
                        time: '9h Ago',
                    },
                    {
                        id: 3,
                        profile: 'profile-16.jpeg',
                        message: '<strong class="text-sm mr-1">Anna Morgan</strong>Upload a file',
                        time: '9h Ago',
                    },
                ],

                messages: [{
                        id: 1,
                        image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-success-light dark:bg-success text-success dark:text-success-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></span>',
                        title: 'Congratulations!',
                        message: 'Your OS has been updated.',
                        time: '1hr',
                    },
                    {
                        id: 2,
                        image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-info-light dark:bg-info text-info dark:text-info-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg></span>',
                        title: 'Did you know?',
                        message: 'You can switch between artboards.',
                        time: '2hr',
                    },
                    {
                        id: 3,
                        image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-danger-light dark:bg-danger text-danger dark:text-danger-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>',
                        title: 'Something went wrong!',
                        message: 'Send Reposrt',
                        time: '2days',
                    },
                    {
                        id: 4,
                        image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-warning-light dark:bg-warning text-warning dark:text-warning-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">    <circle cx="12" cy="12" r="10"></circle>    <line x1="12" y1="8" x2="12" y2="12"></line>    <line x1="12" y1="16" x2="12.01" y2="16"></line></svg></span>',
                        title: 'Warning',
                        message: 'Your password strength is low.',
                        time: '5days',
                    },
                ],

                languages: [{
                        id: 1,
                        key: 'Chinese',
                        value: 'zh',
                    },
                    {
                        id: 2,
                        key: 'Danish',
                        value: 'da',
                    },
                    {
                        id: 3,
                        key: 'English',
                        value: 'en',
                    },
                    {
                        id: 4,
                        key: 'French',
                        value: 'fr',
                    },
                    {
                        id: 5,
                        key: 'German',
                        value: 'de',
                    },
                    {
                        id: 6,
                        key: 'Greek',
                        value: 'el',
                    },
                    {
                        id: 7,
                        key: 'Hungarian',
                        value: 'hu',
                    },
                    {
                        id: 8,
                        key: 'Italian',
                        value: 'it',
                    },
                    {
                        id: 9,
                        key: 'Japanese',
                        value: 'ja',
                    },
                    {
                        id: 10,
                        key: 'Polish',
                        value: 'pl',
                    },
                    {
                        id: 11,
                        key: 'Portuguese',
                        value: 'pt',
                    },
                    {
                        id: 12,
                        key: 'Russian',
                        value: 'ru',
                    },
                    {
                        id: 13,
                        key: 'Spanish',
                        value: 'es',
                    },
                    {
                        id: 14,
                        key: 'Swedish',
                        value: 'sv',
                    },
                    {
                        id: 15,
                        key: 'Turkish',
                        value: 'tr',
                    },
                    {
                        id: 16,
                        key: 'Arabic',
                        value: 'ae',
                    },
                ],

                removeNotification(value) {
                    this.notifications = this.notifications.filter((d) => d.id !== value);
                },

                removeMessage(value) {
                    this.messages = this.messages.filter((d) => d.id !== value);
                },
            }));

            // content section
            Alpine.data('sales', () => ({
                init() {
                    isDark = this.$store.app.theme === 'dark' || this.$store.app.isDarkMode ? true :
                        false;
                    isRtl = this.$store.app.rtlClass === 'rtl' ? true : false;

                    const revenueChart = null;
                    const salesByCategory = null;
                    const dailySales = null;
                    const totalOrders = null;

                    // revenue
                    setTimeout(() => {
                        this.revenueChart = new ApexCharts(this.$refs.revenueChart, this
                            .revenueChartOptions);
                        this.$refs.revenueChart.innerHTML = '';
                        this.revenueChart.render();

                        // sales by category
                        this.salesByCategory = new ApexCharts(this.$refs.salesByCategory, this
                            .salesByCategoryOptions);
                        this.$refs.salesByCategory.innerHTML = '';
                        this.salesByCategory.render();

                        // daily sales
                        this.dailySales = new ApexCharts(this.$refs.dailySales, this
                            .dailySalesOptions);
                        this.$refs.dailySales.innerHTML = '';
                        this.dailySales.render();

                        // total orders
                        this.totalOrders = new ApexCharts(this.$refs.totalOrders, this
                            .totalOrdersOptions);
                        this.$refs.totalOrders.innerHTML = '';
                        this.totalOrders.render();
                    }, 300);

                    this.$watch('$store.app.theme', () => {
                        isDark = this.$store.app.theme === 'dark' || this.$store.app
                            .isDarkMode ? true : false;

                        this.revenueChart.updateOptions(this.revenueChartOptions);
                        this.salesByCategory.updateOptions(this.salesByCategoryOptions);
                        this.dailySales.updateOptions(this.dailySalesOptions);
                        this.totalOrders.updateOptions(this.totalOrdersOptions);
                    });

                    this.$watch('$store.app.rtlClass', () => {
                        isRtl = this.$store.app.rtlClass === 'rtl' ? true : false;
                        this.revenueChart.updateOptions(this.revenueChartOptions);
                    });
                },

                // revenue
                get revenueChartOptions() {
                    return {
                        series: [{
                                name: 'Income',
                                data: [16800, 16800, 15500, 17800, 15500, 17000, 19000, 16000,
                                    15000, 17000, 14000, 17000
                                ],
                            },
                            {
                                name: 'Expenses',
                                data: [16500, 17500, 16200, 17300, 16000, 19500, 16000, 17000,
                                    16000, 19000, 18000, 19000
                                ],
                            },
                        ],
                        chart: {
                            height: 325,
                            type: 'area',
                            fontFamily: 'Nunito, sans-serif',
                            zoom: {
                                enabled: false,
                            },
                            toolbar: {
                                show: false,
                            },
                        },
                        dataLabels: {
                            enabled: false,
                        },
                        stroke: {
                            show: true,
                            curve: 'smooth',
                            width: 2,
                            lineCap: 'square',
                        },
                        dropShadow: {
                            enabled: true,
                            opacity: 0.2,
                            blur: 10,
                            left: -7,
                            top: 22,
                        },
                        colors: isDark ? ['#2196f3', '#e7515a'] : ['#1b55e2', '#e7515a'],
                        markers: {
                            discrete: [{
                                    seriesIndex: 0,
                                    dataPointIndex: 6,
                                    fillColor: '#1b55e2',
                                    strokeColor: 'transparent',
                                    size: 7,
                                },
                                {
                                    seriesIndex: 1,
                                    dataPointIndex: 5,
                                    fillColor: '#e7515a',
                                    strokeColor: 'transparent',
                                    size: 7,
                                },
                            ],
                        },
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep',
                            'Oct', 'Nov', 'Dec'
                        ],
                        xaxis: {
                            axisBorder: {
                                show: false,
                            },
                            axisTicks: {
                                show: false,
                            },
                            crosshairs: {
                                show: true,
                            },
                            labels: {
                                offsetX: isRtl ? 2 : 0,
                                offsetY: 5,
                                style: {
                                    fontSize: '12px',
                                    cssClass: 'apexcharts-xaxis-title',
                                },
                            },
                        },
                        yaxis: {
                            tickAmount: 7,
                            labels: {
                                formatter: (value) => {
                                    return value / 1000 + 'K';
                                },
                                offsetX: isRtl ? -30 : -10,
                                offsetY: 0,
                                style: {
                                    fontSize: '12px',
                                    cssClass: 'apexcharts-yaxis-title',
                                },
                            },
                            opposite: isRtl ? true : false,
                        },
                        grid: {
                            borderColor: isDark ? '#191e3a' : '#e0e6ed',
                            strokeDashArray: 5,
                            xaxis: {
                                lines: {
                                    show: true,
                                },
                            },
                            yaxis: {
                                lines: {
                                    show: false,
                                },
                            },
                            padding: {
                                top: 0,
                                right: 0,
                                bottom: 0,
                                left: 0,
                            },
                        },
                        legend: {
                            position: 'top',
                            horizontalAlign: 'right',
                            fontSize: '16px',
                            markers: {
                                width: 10,
                                height: 10,
                                offsetX: -2,
                            },
                            itemMargin: {
                                horizontal: 10,
                                vertical: 5,
                            },
                        },
                        tooltip: {
                            marker: {
                                show: true,
                            },
                            x: {
                                show: false,
                            },
                        },
                        fill: {
                            type: 'gradient',
                            gradient: {
                                shadeIntensity: 1,
                                inverseColors: !1,
                                opacityFrom: isDark ? 0.19 : 0.28,
                                opacityTo: 0.05,
                                stops: isDark ? [100, 100] : [45, 100],
                            },
                        },
                    };
                },

                // sales by category
                get salesByCategoryOptions() {
                    return {
                        series: [285, 237, 270, 100, 100],
                        chart: {
                            type: 'donut',
                            height: 460,
                            fontFamily: 'Nunito, sans-serif',
                        },
                        dataLabels: {
                            enabled: false,
                        },
                        stroke: {
                            show: true,
                            width: 25,
                            colors: isDark ? ['#0e1726', '#0e1726', '#0e1726', '#0e1726'] : ['#fff',
                                '#fff', '#fff'
                            ],
                        },
                        colors: isDark ? ['#5c1ac3', '#e2a03f', '#e7515a', '#e2a03f'] : ['#e2a03f',
                            '#5c1ac3', '#e7515a'
                        ],
                        legend: {
                            position: 'bottom',
                            horizontalAlign: 'center',
                            fontSize: '14px',
                            markers: {
                                width: 10,
                                height: 10,
                                offsetX: -2,
                            },
                            height: 50,
                            offsetY: 20,
                        },
                        plotOptions: {
                            pie: {
                                donut: {
                                    size: '65%',
                                    background: 'transparent',
                                    labels: {
                                        show: true,
                                        name: {
                                            show: true,
                                            fontSize: '29px',
                                            offsetY: -10,
                                        },
                                        value: {
                                            show: true,
                                            fontSize: '26px',
                                            color: isDark ? '#bfc9d4' : undefined,
                                            offsetY: 16,
                                            formatter: (val) => {
                                                return val;
                                            },
                                        },
                                        total: {
                                            show: true,
                                            label: 'Total',
                                            color: '#888ea8',
                                            fontSize: '29px',
                                            formatter: (w) => {
                                                return w.globals.seriesTotals.reduce(function(a,
                                                    b) {
                                                    return a + b;
                                                }, 0);
                                            },
                                        },
                                    },
                                },
                            },
                        },
                        labels: ['Apparel', 'Sports', 'Others', 'test', 'tets1'],
                        states: {
                            hover: {
                                filter: {
                                    type: 'none',
                                    value: 0.15,
                                },
                            },
                            active: {
                                filter: {
                                    type: 'none',
                                    value: 0.15,
                                },
                            },
                        },
                    };
                },

                // daily sales
                get dailySalesOptions() {
                    return {
                        series: [{
                                name: 'Sales',
                                data: [44, 55, 41, 67, 22, 43, 21],
                            },
                            {
                                name: 'Last Week',
                                data: [13, 23, 20, 8, 13, 27, 33],
                            },
                        ],
                        chart: {
                            height: 160,
                            type: 'bar',
                            fontFamily: 'Nunito, sans-serif',
                            toolbar: {
                                show: false,
                            },
                            stacked: true,
                            stackType: '100%',
                        },
                        dataLabels: {
                            enabled: false,
                        },
                        stroke: {
                            show: true,
                            width: 1,
                        },
                        colors: ['#e2a03f', '#e0e6ed'],
                        responsive: [{
                            breakpoint: 480,
                            options: {
                                legend: {
                                    position: 'bottom',
                                    offsetX: -10,
                                    offsetY: 0,
                                },
                            },
                        }, ],
                        xaxis: {
                            labels: {
                                show: false,
                            },
                            categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat'],
                        },
                        yaxis: {
                            show: false,
                        },
                        fill: {
                            opacity: 1,
                        },
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                columnWidth: '25%',
                            },
                        },
                        legend: {
                            show: false,
                        },
                        grid: {
                            show: false,
                            xaxis: {
                                lines: {
                                    show: false,
                                },
                            },
                            padding: {
                                top: 10,
                                right: -20,
                                bottom: -20,
                                left: -20,
                            },
                        },
                    };
                },

                // total orders
                get totalOrdersOptions() {
                    return {
                        series: [{
                            name: 'Sales',
                            data: [28, 40, 36, 52, 38, 60, 38, 52, 36, 40],
                        }, ],
                        chart: {
                            height: 290,
                            type: 'area',
                            fontFamily: 'Nunito, sans-serif',
                            sparkline: {
                                enabled: true,
                            },
                        },
                        stroke: {
                            curve: 'smooth',
                            width: 2,
                        },
                        colors: isDark ? ['#00ab55'] : ['#00ab55'],
                        labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'],
                        yaxis: {
                            min: 0,
                            show: false,
                        },
                        grid: {
                            padding: {
                                top: 125,
                                right: 0,
                                bottom: 0,
                                left: 0,
                            },
                        },
                        fill: {
                            opacity: 1,
                            type: 'gradient',
                            gradient: {
                                type: 'vertical',
                                shadeIntensity: 1,
                                inverseColors: !1,
                                opacityFrom: 0.3,
                                opacityTo: 0.05,
                                stops: [100, 100],
                            },
                        },
                        tooltip: {
                            x: {
                                show: false,
                            },
                        },
                    };
                },
            }));
        });
    </script>
    <script>
        document.getElementById('multiSelect').addEventListener('click', function(event) {
            var div = document.getElementById('multiSelectDisplay');
            div.style.display = (div.style.display === 'none') ? 'block' : 'none';
            event.stopPropagation();
        });

        document.addEventListener('click', function(event) {
            var div = document.getElementById('multiSelectDisplay');
            if (!div.contains(event.target) && event.target.id !== 'multiSelect') {
                div.style.display = 'none';
            }
        });
        $(function() {
            $('.tabs-nav a').click(function() {
                // Check for active
                $('.tabs-nav li').removeClass('active');
                $(this).parent().addClass('active');

                // Display active tab
                let currentTab = $(this).attr('href');
                $('.tabs-content div').hide();
                $(currentTab).show();

                return false;
            });
        });

        $(function() {
            $('.tabs-nav2 a').click(function() {
                // Check for active
                $('.tabs-nav2 li').removeClass('active');
                $(this).parent().addClass('active');

                // Display active tab
                let currentTab = $(this).attr('href');
                $('.tabs-content2 .hides').hide();
                $(currentTab).show();

                return false;
            });
        });
    </script>
</body>

</html>
