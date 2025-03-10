

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Manage Businesses</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="{{ url('assets/css/business.css') }}" rel="stylesheet" />
    <script src="{{ url('assets/js/chart.js') }}"></script>
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="{{url('fontawesome/css/all.min.css')}}" />
</head>
<body>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mt-4">
                        <a href="javascript:history.back()" class="addBusinessbutton d-flex justify-content-start">
                            <i class="fa-solid fa-arrow-left"></i>
                        </a>                        
                    </div>


                    <div class="col-lg-4 mt-4">
                        <h2 class="text-center" style="color: #fff; font-size: 35px;">Your Businesses</h2>
                    </div>


                    <div class="col-lg-4 mt-4">
                        <a href="{{ url('/business/create') }}" class="addBusinessbutton d-flex justify-content-end"><i class="fa-solid fa-plus"></i></a>
                    </div>
                </div>


                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif


                <div class="row mt-4">
                    @foreach($business_infos as $business)
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-10">
                                    <div class="container businessesCard ps-3 pb-3 pt-1">
                                        <div class="container">
                                            <div class="row align-items-center">
                                                <div class="col-lg-7 d-flex align-items-center businessName">
                                                    <p>{{ $business->business_name }}</p>
                                                </div>
                                                <div class="col-lg-5 d-flex justify-content-center align-items-center">
                                                    <img src="{{ asset('business_logos/' . $business->business_logo) }}" alt="Business Logo" class="logos" />
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-1"></div>
                                            <div class="col-lg-10 d-flex justify-content-center">
                                                <label class="upload-btn">
                                                    <img src="{{ asset('business_images/' . $business->business_image) }}" alt="Business Image" class="businesses" />
                                                </label>
                                            </div>
                                            <div class="col-lg-1"></div>
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-12 mt-3">
                                                <p class="businessSections">Year Established:
                                                    <span class="editBusiness">{{ $business->year }}</span>
                                                </p>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-12">
                                                <p class="businessSections">Business Type:
                                                    <span class="editBusiness">{{ $business->business_type }}</span>
                                                </p>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-12">
                                                <p class="businessSections">Location:
                                                    <span class="editBusiness">{{ $business->location }}</span>
                                                </p>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-12">
                                                <p class="businessSections">Description</p>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-12 businessIndexDesc">
                                                <p class="editBusiness" style="font-size: 13px; width: 100%;">{{ $business->description }}</p>
                                            </div>
                                        </div>


                                        <div class="row mt-3">
                                            <div class="col-lg-12 d-flex justify-content-between">
                                                <a href="{{ url('/business', $business->id) }}/edit" class="btn"><i class="fa-regular fa-pen-to-square" style="color: black;"></i></a>
                                                <form action="{{ url('/business', $business->id) }}" method="post" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="businessDelete" onclick="return confirm('Are you sure?')"><i class="fa-regular fa-trash-can"style="color: black;"></i></button>
                                                </form>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </div>
</body>
</html>



