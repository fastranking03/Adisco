<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>PIXEL CRM - Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="NOINDEX,NOFOLLOW">
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

            <div class="dvanimation animate__animated p-6" :class="[$store.app.animation]">
                <!-- start main content section -->
                <div class="back-arrow">
                    <a href=""><span><i class="fa-solid fa-arrow-left"></i></span></a>
                </div>
                <div x-data="sales">
                    <div class="box-card">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="business-left-wrapper">
                                    <div class="busines-left-top">
                                        <div class="l-top-header">
                                            <div><a href="">{{ $contact_details->authorized_person_id }}</a>
                                            </div>
                                            <div style="display:flex;gap:8px;">
                                                <p>Customer</p>
                                                <a href="" class="edit-text" data-bs-toggle="modal"
                                                    data-bs-target="#modal1"><i class="fa-regular fa-edit"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="modal1" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Info</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="">Name</label>
                                                                        <input type="text" class="form-control" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 mt-2">
                                                                    <div class="form-group">
                                                                        <label for="">Name</label>
                                                                        <input type="text" class="form-control" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End -->
                                        <div class="business-name">
                                            <h2>{{ $contact_details->first_name }}{{ $contact_details->last_name }}</h2>
                                        </div>
                                        <div class="business-icon-wrap">
                                            <ul>
                                                <li>
                                                    <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
                                                    <span>Note</span>
                                                </li>

                                                <li>
                                                    <a href=""><i class="fa-solid fa-laptop"></i></a>
                                                    <span>Task</span>
                                                </li>
                                                <li>
                                                    <a href=""><i class="fa-solid fa-handshake"></i></a>
                                                    <span>Task</span>
                                                </li>
                                                <li>
                                                    <a href="">...</a>
                                                    <span>More</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div style="display: flex ; align-items:center; justify-content:space-between">
                                            <span>{{ \Carbon\Carbon::parse($contact_details->created_at)->format('d F Y, h:i A') }}
                                            </span>

                                            <span>
                                                Created By : {{ $contact_details->created_by }} </span>
                                        </div>


                                    </div>
                                    <div class="business-left-bottom">
                                        <div class="header-wrap">
                                            <div class="header-name" style="justify-content: space-between;">
                                                <h5>Details</h5>
                                            </div>
                                            <div>
                                                <a href="#" class="edit-text" id="editButton">
                                                    <i class="fa-regular fa-edit" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Custom Right-Side Modal -->
                                        <div class="custom-modal-right" id="modal2">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Contact Details</h5>
                                                        <button type="button" class="btn-close" id="closeButton"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('edit-contact') }}"
                                                            method="POST">
                                                            @csrf <!-- CSRF token for Laravel -->
                                        
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="business_id">Title:</label>
                                                                        <input class="form-control" id="title" name="title" value="{{  $contact_details->title}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="business_id">First Name:</label>
                                                                        <input class="form-control" id="first_name" name="first_name" value="{{  $contact_details->first_name}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="business_id">Middle Name:</label>
                                                                        <input class="form-control" id="mid_name" name="mid_name" value="{{  $contact_details->mid_name}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="contact_id" value="{{ $contact_details->authorized_person_id }}">
                                                            <div class="row mt-3">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="business_id">Last Name::</label>
                                                                        <input class="form-control" id="last_name" name="last_name" value="{{  $contact_details->last_name}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="business_id">Date of Birth:</label>
                                                                        <input type="date" class="form-control" id="dob" name="dob" value="{{  $contact_details->dob}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="business_id">Gender:</label>
                                                                        <select id="gender" class="form-control" name="gender">
                                                                            <option value="male" {{ $contact_details->gender == 'male' ? 'selected' : '' }}>Male</option>
                                                                            <option value="female" {{ $contact_details->gender == 'female' ? 'selected' : '' }}>Female</option>
                                                                            <option value="other" {{ $contact_details->gender == 'other' ? 'selected' : '' }}>Other</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="business_id">Email:</label>
                                                                        <input class="form-control" id="email" name="email" value="{{  $contact_details->email}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="business_id">Phone:</label>
                                                                        <input class="form-control" id="phone" name="phone" value="{{  $contact_details->phone}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="business_id">Mobile:</label>
                                                                        <input class="form-control" id="mobile" name="mobile" value="{{  $contact_details->mobile}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="business_id">Alternate Phone:</label>
                                                                        <input class="form-control" id="alternate_phone" name="alternate_phone" value="{{  $contact_details->alternate_phone}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="business_id">Designation:</label>
                                                                        <input class="form-control" id="designation" name="designation" value="{{  $contact_details->designation}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="business_id">Secondary Email:</label>
                                                                        <input class="form-control" id="secondary_email" name="secondary_email" value="{{  $contact_details->secondary_email}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                        
                                                            <div class="row mt-3">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="business_id">Secondary Phone:</label>
                                                                        <input class="form-control" id="secondary_phone" name="secondary_phone" value="{{  $contact_details->secondary_phone}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="business_id">Property Number:</label>
                                                                        <input class="form-control" id="property_no" name="property_no" value="{{  $contact_details->property_no}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="business_id">Street Name:</label>
                                                                        <input class="form-control" id="street_name" name="street_name" value="{{  $contact_details->street_name}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                        
                                                            <div class="row mt-3">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="business_id">City:</label>
                                                                        <input class="form-control" id="city" name="city" value="{{  $contact_details->city}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="business_id">Postal Code:</label>
                                                                        <input class="form-control" id="postal_code" name="postal_code" value="{{  $contact_details->postal_code}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="business_id">Country:</label>
                                                                        <input class="form-control" id="country" name="country" value="{{  $contact_details->country}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                        
                                                            
                                        
                                                            <div class="row mt-3">
                                                                <div class="col-md-3">
                                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>

                                        <!-- Custom CSS for Right-Side Modal -->
                                        <style>
                                            /* Modal is initially hidden off-screen */
                                            .custom-modal-right {
                                                position: fixed;
                                                right: -100%;
                                                /* Start off-screen */
                                                top: 0;
                                                height: 100vh;
                                                width: 40vw;
                                                transition: right 0.3s ease;
                                                /* Smooth slide-in transition with 0.3s duration */
                                                z-index: 1050;
                                                background-color: rgba(255, 255, 255, 1);
                                                box-shadow: -5px 0px 15px rgba(0, 0, 0, 0.3);
                                                display: none;
                                                /* Hidden by default */
                                            }

                                            /* Slide in effect */
                                            .custom-modal-right.show {
                                                right: 0;
                                                /* Slide modal into view */
                                                display: block;
                                            }

                                            .custom-modal-right .modal-content {
                                                height: 100vh;
                                                border-radius: 0;
                                                padding: 20px;
                                            }

                                            /* Dark backdrop */
                                            .custom-backdrop {
                                                position: fixed;
                                                top: 0;
                                                left: 0;
                                                width: 100vw;
                                                height: 100vh;
                                                background: rgba(0, 0, 0, 0.5);
                                                z-index: 1040;
                                                display: none;
                                                /* Hidden by default */
                                                opacity: 0;
                                                /* Start invisible */
                                                transition: opacity 0.3s ease;
                                                /* Smooth fade-in with 0.3s duration */
                                            }

                                            .custom-backdrop.show {
                                                display: block;
                                                opacity: 1;
                                                /* Fade-in effect */
                                            }
                                        </style>

                                        <!-- JavaScript for Modal Toggle -->
                                        <script>
                                            const editButton = document.getElementById('editButton');
                                            const closeButton = document.getElementById('closeButton');
                                            const modal = document.getElementById('modal2');
                                            const backdrop = document.createElement('div');
                                            backdrop.classList.add('custom-backdrop');

                                            document.body.appendChild(backdrop);

                                            // Open Modal
                                            editButton.addEventListener('click', function(event) {
                                                event.preventDefault();
                                                modal.classList.add('show');
                                                backdrop.classList.add('show');
                                            });

                                            // Close Modal
                                            closeButton.addEventListener('click', function() {
                                                modal.classList.remove('show');
                                                backdrop.classList.remove('show');
                                            });

                                            // Close when clicking outside of modal
                                            backdrop.addEventListener('click', function() {
                                                modal.classList.remove('show');
                                                backdrop.classList.remove('show');
                                            });
                                        </script>


                                        <!-- End -->
                                        <style>
                                            .item-flex {
                                                display: flex;
                                                justify-content: space-between;
                                                position: relative;
                                            }

                                            .item-v {
                                                position: relative;
                                            }

                                            .close-bt {
                                                position: absolute;
                                                right: -8px;
                                                top: -12px;
                                            }

                                            .hiddens {
                                                display: none;
                                            }

                                            .button-flex {
                                                display: flex;
                                            }

                                            .form-control,
                                            .btn-primary {
                                                border-radius: 0;
                                            }
                                        </style>
                                        <div class="business-left-details">
                                            <ul>
                                                <li>
                                                    <div class="item-flex">
                                                        <div class="item-d item-close">
                                                            Full Name : <span>{{ $contact_details->title }}
                                                                {{ $contact_details->first_name }}
                                                                {{ $contact_details->mid_name }}
                                                                {{ $contact_details->last_name }} ,
                                                                {{ $contact_details->designation }}</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="item-flex">
                                                        <div class="item-d item-close">
                                                            <span>{{ $contact_details->property_no }} ,
                                                                {{ $contact_details->street_name }} ,
                                                                {{ $contact_details->city }} ,
                                                                {{ $contact_details->postal_code }} ,
                                                                {{ $contact_details->country }}</span>
                                                        </div>

                                                    </div>
                                                </li>




                                                <li>
                                                    <div class="item-flex">
                                                        <div class="item-d item-close">
                                                            Gender: <span>{{ $contact_details->gender }}</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="item-flex">
                                                        <div class="item-d item-close">
                                                            Date of Birth: <span>{{ $contact_details->dob }}</span>
                                                        </div>

                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="item-flex">
                                                        <div class="item-d item-close">
                                                            Email: <span>{{ $contact_details->email }}</span>
                                                        </div>

                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="item-flex">
                                                        <div class="item-d item-close">
                                                            Phone: <span>{{ $contact_details->phone }} ,
                                                                {{ $contact_details->alternate_phone }} ,
                                                                {{ $contact_details->secondary_phone }}</span>
                                                        </div>

                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="item-flex">
                                                        <div class="item-d item-close">
                                                            Mobile: <span>{{ $contact_details->mobile }}</span>
                                                        </div>

                                                    </div>
                                                </li>


                                                <li>
                                                    <div class="item-flex">
                                                        <div class="item-d item-close">
                                                            Secondary Email:
                                                            <span>{{ $contact_details->secondary_email }}</span>
                                                        </div>

                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="item-flex">
                                                        <div class="item-d item-close">
                                                            Updated At: <span>{{ $contact_details->updated_at }}</span>
                                                        </div>

                                                    </div>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="row">
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
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="tab-header tabs-nav">
                                            <ul>
                                                <li class="active"><a href="#notes">Notes</a></li>
                                                <li><a href="#meetings">Meetings</a></li>
                                                <li><a href="#tasks">Tasks</a></li>
                                                <li><a href="#others">Others</a></li>
                                            </ul>
                                        </div>
                                        <div class="card-content tabs-content">
                                            <div id="notes">

                                            </div>
                                            <div id="meetings">
                                                <h3>Meetings</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="tab-header tab-header2  tabs-nav2">
                                            <ul>
                                                <li class="active"><a href="#history">History</a></li>
                                                <li><a href="#qa_audit">QA Audit Report</a></li>
                                            </ul>
                                        </div>
                                        <div class="card-content tabs-content2">
                                            <div id="history" class="hides">
                                                <div class="timeline-container">
                                                    <div class="timeline-end">
                                                        <p>25th April 2024</p>
                                                    </div>
                                                    <div class="business-timeline">
                                                        <div class="timeline-box">
                                                            <div class="timeline-date">
                                                                <span>12:30 PM</span>
                                                            </div>
                                                            <div class="timeline-content">
                                                                <p><span>Called but NA</span> <br><small>By Akram - 27th
                                                                        March 2024</small></p>
                                                            </div>
                                                        </div>
                                                        <div class="timeline-box">
                                                            <div class="timeline-date">
                                                                <span>12:30 PM</span>
                                                            </div>
                                                            <div class="timeline-content">
                                                                <p> Called on 27th morning, Cx was not available. Rec
                                                                    gave mobile number
                                                                    to call. Updated mobile number
                                                                    <small>By Akram - 27th March 2024</small>
                                                                </p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="timeline-end">
                                                        <p>25th April 2024</p>
                                                    </div>
                                                    <div class="business-timeline">
                                                        <div class="timeline-box">
                                                            <div class="timeline-date">
                                                                <span>12:30 PM</span>
                                                            </div>
                                                            <div class="timeline-content">
                                                                <p><span>Called but NA</span> <br><small>By Akram - 27th
                                                                        March 2024</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

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
                                                    data-bs-target="#addNew" aria-controls="addNew"> Add New +</a>
                                            </div>
                                        </div>

                                        <div class="card-contents">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Business ID</th>
                                                        <th>Name</th>
                                                        <th>Category</th>
                                                        <th>Website</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($businesses as $business)
                                                    <tr>
                                                        <td>{{ $business->business_id }}</td>
                                                        <td>{{ $business->business_name }}</td>
                                                        <td>{{ $business->business_category }}</td>
                                                        <td>{{ $business->website }}</td>
                                                        <td>{{ $business->email }}</td>
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
                                            <h4>DEALS</h4>
                                            <div><a href="#" id="dealFormButton" data-bs-toggle="offcanvas"
                                                    data-bs-target="#addNewDeal" aria-controls="addNewDeal">+ Add New
                                                    Deal</a></div>
                                        </div>

                                        <div class="card-contents">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Deal ID</th>
                                                        <th>Deal Name</th>
                                                        <th>Owner</th>
                                                        <th>Type</th>
                                                        <th>Priority</th>
                                                        <th>Comment</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($deals as $deal)
                                                    <tr>
                                                        <td>{{ $deal->id }}</td>
                                                        <td>{{ $deal->deal_name }}</td>
                                                        <td>{{ $deal->deal_owner }}</td>
                                                        <td>{{ $deal->deal_type }}</td>
                                                        <td>{{ $deal->priority }}</td>
                                                        <td>{{ $deal->comment }}</td>
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
                                                    data-bs-target="#addInvoice" aria-controls="addInvoice">+ Add
                                                    Invoice</a></div>
                                        </div>

                                        <div class="card-contents">
                                            <table class="table">
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
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="business-right-wrapper">
                                            <div class="business-right-box">
                                                <div class="right-box-header">
                                                    <div>Link Businesses <span>({{ count($businesses) }})</span></div>

                                                     <div> <a href="#" id="showForm" data-bs-toggle="offcanvas" data-bs-target="#addNew" aria-controls="addNew"> Add New +</a></div> 
                                                </div>
                                                <div>
                                                    @foreach ($businesses as $business)
                                                    <div class="card-content">
                                                        <div class="right-card-name">
                                                            <h3><a
                                                                    href="{{ route('business', ['business_id' => $business->business_id]) }}">
                                                                    {{ $business->business_name }}</a></h3>

                                                            <div>
                                                                <span><a
                                                                        href="{{ $business->website }}">{{ $business->website }}</a></span>
                                                                {{-- <p>{{ $business->phone }}</p>
                                                                <p>{{ $business->email }}</p>
                                                                <p>{{ $business->property_no }},
                                                                    {{ $business->street_name }},
                                                                    {{ $business->city }},
                                                                    {{ $business->state }},
                                                                    {{ $business->postcode }},
                                                                    {{ $business->country }}
                                                                </p> --}}
                                                                <p>Category : {{ $business->business_category }}
                                                                </p>
                                                                <span>Created At:
                                                                    {{ \Carbon\Carbon::parse($business->created_at)->format('d F Y, h:i A') }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Deal -->
                                    <div class="col-md-12 mt-2">
                                        <div class="business-right-wrapper">
                                            <div class="business-right-box">
                                                <div class="right-box-header">
                                                    <div>Deals <span>({{ count($deals) }})</span></div>
                                                    <div><a href="#" id="dealFormButton"
                                                            data-bs-toggle="offcanvas" data-bs-target="#addNewDeal"
                                                            aria-controls="addNewDeal">+ Add New Deal</a></div>
                                                </div>
                                                @foreach ($deals as $deal)
                                                <div class="card-content">
                                                    <div class="right-card-name">
                                                        <div
                                                            style="display: flex; justify-content: space-between; align-items: center;">
                                                            <h3 style="margin-right: 10px;">
                                                                <a
                                                                    href="{{ route('deal-view', ['deal_id' => $deal->id]) }}">{{ $deal->deal_name }}</a>
                                                            </h3>
                                                            <h4>£ {{ $deal->deal_amount }}</h4>
                                                        </div>
                                                        <div>
                                                            <p>
                                                                <span>Created At:
                                                                    {{ \Carbon\Carbon::parse($deal->created_date_time)->format('d F Y, h:i A') }}
                                                                </span>

                                                            </p>
                                                            @if ($deal->primary_contact)
                                                            <!-- Check if primary_contact is not null -->
                                                            @php
                                                            // Assuming that primary_contact holds the ID of the contact
                                                            $primaryContact = \App\Models\Contact::find(
                                                            $deal->primary_contact,
                                                            );
                                                            @endphp

                                                            @if ($primaryContact)
                                                            <!-- Check if the contact exists -->
                                                            <p>Deal Primary
                                                                Contact:{{ $primaryContact->title }}
                                                                {{ $primaryContact->first_name }}
                                                                {{ $primaryContact->mid_name }}
                                                                {{ $primaryContact->last_name }}
                                                            </p>
                                                            {{-- <p>Email: {{ $primaryContact->email }}</p>
                                                            <p>Phone: {{ $primaryContact->phone }}</p> --}}
                                                            @else
                                                            <p>No primary contact found for this deal.
                                                            </p>
                                                            @endif
                                                            @else
                                                            <p>No primary contact ID set for this deal.</p>
                                                            @endif

                                                        </div>
                                                        <div
                                                            style="background-color: rgb(173, 210, 240); padding: 10px;">
                                                            <p>
                                                                <span>
                                                                    @if (isset($deal->deal_stage))
                                                                    @if ($deal->deal_stage == 'newdealcreated')
                                                                    New Deal Created
                                                                    @elseif($deal->deal_stage == 'needtosentproposal')
                                                                    Need to Send Proposal
                                                                    @elseif($deal->deal_stage == 'proposalsent')
                                                                    Proposal Sent
                                                                    @elseif($deal->deal_stage == 'negotiation')
                                                                    Negotiation
                                                                    @elseif($deal->deal_stage == 'needtosentcontract')
                                                                    Need To Send Contract
                                                                    @elseif($deal->deal_stage == 'contractsent')
                                                                    Contract Sent
                                                                    @elseif($deal->deal_stage == 'readytoclose')
                                                                    Ready To Close
                                                                    @elseif($deal->deal_stage == 'closedwon')
                                                                    Closed Won
                                                                    @elseif($deal->deal_stage == 'closedlost')
                                                                    Closed Lost
                                                                    @else
                                                                    Unknown Stage
                                                                    @endif
                                                                    @endif
                                                                </span>
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End -->
                                    <!-- Invoice -->
                                    {{-- <div class="col-md-12 mt-2">
                                        <div class="business-right-wrapper">
                                            <div class="business-right-box">
                                                <div class="right-box-header">
                                                    <div>Invoice <span>(2)</span></div>
                                                    <div><a href="#" id="dealFormButton"
                                                            data-bs-toggle="offcanvas" data-bs-target="#addInvoice"
                                                            aria-controls="addInvoice">+ Add</a></div>
                                                </div>
                                                <div class="card-content">
                                                    <div class="right-card-name">
                                                        <h3>24665533</h3>
                                                        <div>
                                                            <p>Amount : £ 999.00</p>
                                                            <p>Due Date : 5th May 2024 </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <div class="right-card-name">
                                                        <h3>24665533</h3>
                                                        <div>
                                                            <p>Amount : £ 999.00</p>
                                                            <p>Due Date : 5th May 2024</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!-- Invoice -->
                                </div>
                                <!-- Here is your dynamic values -->
                                <div class="business-right-wrapper d-none">
                                    <!-- Start -->
                                    <div class="accordionItem business-right-card">
                                        <div class="card-item">
                                            <div class="business-right-title">
                                                <h5 id="contactAccordion"><span><i
                                                            class="fa-solid fa-angle-right"></i> </span>Contact </h5>
                                            </div>
                                            <div class="business-right-contact comman-accordion-content"
                                                id="contactsDetails">
                                                <div class="contact-button-wrap">
                                                    <a href="#" id="showContacts" data-bs-toggle="offcanvas"
                                                        data-bs-target="#addExisting" aria-controls="addExisting">Add
                                                        Existing</a>
                                                    <span href="#" id="showForm" data-bs-toggle="offcanvas"
                                                        data-bs-target="#addNew" aria-controls="addNew"> Add New +</span>
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
                aria-labelledby="offcanvasWithBothOptionsLabel" style="width: 50%;">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Add New Business</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div>
                        <form action="{{ route('submit-business-merge-with-contact') }}" method="POST">
                            @csrf <!-- CSRF token for Laravel -->
                            <div class="row">
                                <input type="hidden" name="contact_id" value="{{ $contact_details->authorized_person_id }}">
                                	
                                <!-- Business Name -->
                                <div class="col-md-3">
                                    <label for="business_name">Business Name:</label>
                                    <input type="text" id="business_name" name="business_name" required class="form-control">
                                </div>

                                 <!-- Follow up Id -->
                                 <div class="col-md-3">
                                    <label for="business_name">Follow Up Id:</label>
                                    <input type="text" id="business_name" name="attached_follow_up_id" required class="form-control">
                                </div>

                                <!-- Business Category -->
                                <div class="col-md-6">
                                    <label for="business_category">Business Category:</label> 
                                        {{-- <input type="text" id="business_category" name="business_category" class="form-control"
                                            value="{{ $business->business_category ?? '' }}" hidden> <!-- Hidden input for the text value --> --}}
                                        <select name="businesscategory" id="businesscategory" name="business_category" class="form-select edit-company-input">
                                            <option value="" disabled selected>Select</option>
                                            <option value="Bakery"  >Bakery</option>
                                            <option value="Electricians"  >Electricians</option>
                                            <option value="Builders">Builders</option>
                                            <option value="Dentists" >Dentists</option>
                                            <option value="Taxi Servie">Taxi Service</option>
                                            <option value="Cafe" >Cafe</option>
                                            <option value="Plumbing & Heating">Plumbing & Heating</option>
                                            <option value="Restaurant" >Restaurant</option>
                                            <option value="Doors and Windows" >Doors and Windows</option>
                                            <option value="Plumbing and Heating" >Plumbing and Heating</option>
                                            <option value="Repair Service" >Repair Service</option>
                                            <option value="Travellers" >Travellers</option>
                                            <option value="Holiday Accommodation and Parks" >Holiday Accommodation and Parks</option>
                                            <option value="Event Management" >Event Management</option>
                                            <option value="English Restaurants" >English Restaurants</option>
                                            <option value="Cafes and Coffee Shops" >Cafes and Coffee Shops</option>
                                            <option value="Locksmiths" >Locksmiths</option>
                                            <option value="Self Catering Holiday Accommodation" >Self Catering Holiday Accommodation</option>
                                            <option value="Taxis and Private Hire Vehicles" >Taxis and Private Hire Vehicles</option>
                                            <option value="Florists" >Florists</option>
                                            <option value="Chauffeur Services" >Chauffeur Services</option>
                                            <option value="Bakeries" >Bakeries</option>
                                            <option value="Chauffeur Driven Car Hire" >Chauffeur Driven Car Hire</option>
                                            <option value="Granite Suppliers" >Granite Suppliers</option>
                                            <option value="Travel Agents & Services"  >Travel Agents & Services</option>
                                            <option value="Headstones" >Headstones</option>
                                            <option value="Plumbers" >Plumbers</option>
                                            <option value="Commercial Flooring" >Commercial Flooring</option>
                                            <option value="Kitchen Tiling" >Kitchen Tiling</option>
                                            <option value="Tilers" >Tilers</option>
                                            <option value="Coffee Machines and Supplies" >Coffee Machines and Supplies</option>
                                            <option value="Monumental Masons and Memorials" >Monumental Masons and Memorials</option>
                                            <option value="Italian Restaurants" >Italian Restaurants</option>
                                            <option value="Fireplaces" >Fireplaces</option>
                                            <option value="Indian Restaurants" >Indian Restaurants</option>
                                            <option value="Pub Restaurants" >Pub Restaurants</option>
                                            <option value="Floor Sanding and Polishing" >Floor Sanding and Polishing</option>
                                            <option value="Fish and Chip Shops and Restaurants" >Fish and Chip Shops and Restaurants</option>
                                            <option value="Airport Transfers" >Airport Transfers</option>
                                            <option value="Painters and Decorators" >Painters and Decorators</option>
                                            <option value="Tile Suppliers" >Tile Suppliers</option>
                                            <option value="Steakhouse Restaurants" >Steakhouse Restaurants</option>
                                            <option value="Welders" >Welders</option>
                                            <option value="Party & Event Planning" >Party & Event Planning</option>
                                            <option value="Pubs" >Pubs</option>
                                            <option value="Real Estate" >Real Estate</option>
                                            <option value="Pet Care" >Pet Care</option>
                                            <option value="Civil Engineering" >Civil Engineering</option>
                                            <option value="Kitchen Installers" >Kitchen Installers</option>
                                            <option value="Dog Walking" >Dog Walking</option>
                                            <option value="Flooring" >Flooring</option>
                                            <option value="Air Conditioning" >Air Conditioning</option>
                                            <option value="Laundries" >Laundries</option>
                                            <option value="Cleaning" >Cleaning</option>
                                            <option value="Personal Trainer" >Personal Trainer</option>
                                            <option value="Skilled Trades" >Skilled Trades</option>
                                            <option value="Business Brokers" >Business Brokers</option>
                                            <option value="Catering Services" >Catering Services</option>
                                        </select>
                                    
                                </div>

                                <div class="col-md-3 mt-2">
                                    <label for="businesstype">Company Type:</label>
                                    <select name="business_type" id="businesstype" class="form-select edit-company-input">
                                        <option value="" selected disabled>Select</option>
                                        <option value="Sole trader">Sole trader</option>
                                        <option value="Partnership">Partnership</option>
                                        <option value="Limited Company">Limited Company</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>

                                <!-- Phone -->
                                <div class="col-md-3 mt-2">
                                    <label for="phone">Phone:</label>
                                    <input type="text" id="phone" name="phone" class="form-control">
                                </div>

                                <!-- Website -->
                                <div class="col-md-3 mt-2">
                                    <label for="website">Website:</label>
                                    <input type="text" id="website" name="website" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-4">
                                <!-- Email -->
                                <div class="col-md-3">
                                    <label for="email_id">Email:</label>
                                    <input type="email" id="email_id" name="email_id" class="form-control">
                                </div>

                                <!-- Property Number -->
                                <div class="col-md-3">
                                    <label for="property_no">Property Number:</label>
                                    <input type="text" id="property_no" name="property_no" class="form-control">
                                </div>

                                <!-- Street Name -->
                                <div class="col-md-3">
                                    <label for="street_name">Street Name:</label>
                                    <input type="text" id="street_name" name="street_name" class="form-control">
                                </div>

                                <!-- City -->
                                <div class="col-md-3">
                                    <label for="city">City:</label>
                                    <input type="text" id="city" name="city" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-4">
                                <!-- State -->
                                <div class="col-md-3">
                                    <label for="state">State:</label>
                                    <input type="text" id="state" name="state" class="form-control">
                                </div>

                                <!-- Postcode -->
                                <div class="col-md-3">
                                    <label for="postcode">Postcode:</label>
                                    <input type="text" id="postcode" name="postcode" class="form-control">
                                </div>

                                <!-- Country -->
                                <div class="col-md-3">
                                    <label for="country">Country:</label>
                                    <input type="text" id="country" name="country" class="form-control">
                                </div>

                                <!-- Company Owner -->
                                <div class="col-md-3">
                                    <label for="company_owner">Company Owner:</label>
                                    <input type="text" id="company_owner" name="company_owner" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-3">
                                    <label for="company_domain_name">Company Domain Name:</label>
                                    <input type="text" id="company_domain_name" name="company_domain_name" class="form-control">
                                </div>

                                <!-- Type -->
                                <div class="col-md-3">
                                    <label for="type">Type:</label>
                                    <input type="text" id="type" name="type" class="form-control">
                                </div>

                                <!-- Number of Employees -->
                                <div class="col-md-3">
                                    <label for="no_of_employee">Number of Employees:</label>
                                    <input type="number" id="no_of_employee" name="no_of_employee" class="form-control">
                                </div>

                                <!-- Annual Revenue -->
                                <div class="col-md-3">
                                    <label for="annual_revenue">Annual Revenue:</label>
                                    <input type="number" id="annual_revenue" name="annual_revenue" class="form-control">
                                </div>
                                
                              </div>
                              <div class="row mt-4">
                                   <!-- Time Zone -->
                                   <div class="col-md-3">
                                    <label for="time_zone">Time Zone:</label>
                                    <input type="text" id="time_zone" name="time_zone" class="form-control">
                                </div>
                                <!-- LinkedIn URL -->
                                <div class="col-md-3">
                                    <label for="linked_in_url">LinkedIn URL:</label>
                                    <input type="text" id="linked_in_url" name="linked_in_url" class="form-control">
                                </div>
                           </div>

                            <div class="row mt-4">
                                 <!-- Description -->
                                <div class="col-md-6">
                                    <label for="description">Description:</label>
                                    <textarea id="description" name="description" class="form-control" rows="3"></textarea>
                                </div>
                             </div>
                             <div class="row mt-4">
                                <!-- Submit Button -->
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                             </div>
                        </form>
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
                aria-labelledby="offcanvasWithBothOptionsLabel" style="width: 30%;">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="business-data-card">
                        <div class="data-title">
                            <h4>Add Invoice</h4>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <form action="https://crm1.fastranking.co.uk/business-invoice-submit" method="POST">
                                    <input type="hidden" name="_token"
                                        value="AfPcolxSnRVTuulhrspXCxqpjdxYUZOKpS6ZjLET" autocomplete="off">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="business_id">Business Id</label>
                                                <input class="form-control" id="business_id" name="business_id"
                                                    value="FRBI000006" readonly="">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="business_name">Business Name</label>
                                                <input type="text" class="form-control" id="business_name"
                                                    name="business_name" value="New business 10" readonly="">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group position-relative">
                                                <label>Select Deals (Multiple)</label>
                                                <div class="select-multiple-deal" id="multiSelect">
                                                    <span>Select Deals</span>
                                                </div>
                                                <div class="deal-value-visible" id="multiSelectDisplay"
                                                    style="display: none;">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="FRDL000001" id="deal_FRDL000001"
                                                            name="deal_ids[]">
                                                        <label class="form-check-label" for="deal_FRDL000001">
                                                            first deal
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="FRDL000002" id="deal_FRDL000002"
                                                            name="deal_ids[]">
                                                        <label class="form-check-label" for="deal_FRDL000002">
                                                            second deal
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="FRDL000003" id="deal_FRDL000003"
                                                            name="deal_ids[]">
                                                        <label class="form-check-label" for="deal_FRDL000003">
                                                            third deal
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="FRDL000004" id="deal_FRDL000004"
                                                            name="deal_ids[]">
                                                        <label class="form-check-label" for="deal_FRDL000004">
                                                            fourth deal
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="FRDL000005" id="deal_FRDL000005"
                                                            name="deal_ids[]">
                                                        <label class="form-check-label" for="deal_FRDL000005">
                                                            Chips Deal
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="FRDL000006" id="deal_FRDL000006"
                                                            name="deal_ids[]">
                                                        <label class="form-check-label" for="deal_FRDL000006">
                                                            deal 100
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="FRDL000007" id="deal_FRDL000007"
                                                            name="deal_ids[]">
                                                        <label class="form-check-label" for="deal_FRDL000007">
                                                            deal 999
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="FRDL000008" id="deal_FRDL000008"
                                                            name="deal_ids[]">
                                                        <label class="form-check-label" for="deal_FRDL000008">
                                                            liquor
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="FRDL000009" id="deal_FRDL000009"
                                                            name="deal_ids[]">
                                                        <label class="form-check-label" for="deal_FRDL000009">
                                                            tech mania
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="FRDL000010" id="deal_FRDL000010"
                                                            name="deal_ids[]">
                                                        <label class="form-check-label" for="deal_FRDL000010">
                                                            deal no. 99
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="FRDL000011" id="deal_FRDL000011"
                                                            name="deal_ids[]">
                                                        <label class="form-check-label" for="deal_FRDL000011">
                                                            deal T57Y
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="FRDL000012" id="deal_FRDL000012"
                                                            name="deal_ids[]">
                                                        <label class="form-check-label" for="deal_FRDL000012">
                                                            DEAL43534
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="FRDL000013" id="deal_FRDL000013"
                                                            name="deal_ids[]">
                                                        <label class="form-check-label" for="deal_FRDL000013">
                                                            web dev
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="FRDL000014" id="deal_FRDL000014"
                                                            name="deal_ids[]">
                                                        <label class="form-check-label" for="deal_FRDL000014">
                                                            deal new 25 april
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="FRDL000015" id="deal_FRDL000015"
                                                            name="deal_ids[]">
                                                        <label class="form-check-label" for="deal_FRDL000015">
                                                            Deal testing 25
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="FRDL000016" id="deal_FRDL000016"
                                                            name="deal_ids[]">
                                                        <label class="form-check-label" for="deal_FRDL000016">
                                                            deal fr
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="FRDL000017" id="deal_FRDL000017"
                                                            name="deal_ids[]">
                                                        <label class="form-check-label" for="deal_FRDL000017">
                                                            fereg
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="total_amount">Total Amount</label>
                                                <input type="text" class="form-control" id="total_amount"
                                                    name="total_amount" required="">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="payment_due_date">Payment Due Date</label>
                                                <input type="date" class="form-control" id="payment_due_date"
                                                    name="payment_due_date" required="">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
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

                                        <div class="col-md-4">
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
                                    <button class="my-3 mx-auto btn btn-primary" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End --}}
            <!-- start footer section -->
            <div class="mt-auto p-6 pt-0 text-center dark:text-white-dark ltr:sm:text-left rtl:sm:text-right">
                © <span id="footer-year">2022</span>. SpartaCrm All rights reserved.
            </div>
            <!-- end footer section -->
        </div>
    </div>

    @include('component/foot');
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Get all the edit buttons
            const editButtons = document.querySelectorAll('.edit-text');

            editButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const itemFlex = this.closest('.item-flex');
                    const itemV = itemFlex.querySelector('.item-v');
                    const itemD = itemFlex.querySelector('.item-d');
                    itemV.classList.toggle('hiddens');
                    itemD.style.display = "none";
                });
            });

            // Get all the close buttons
            const closeButtons = document.querySelectorAll('.close-bt');

            closeButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const itemV = this.closest('.item-v');
                    const itemD = itemV.nextElementSibling;
                    itemV.classList.add('hiddens');
                    itemD.style.display = "block";
                });
            });
        });


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