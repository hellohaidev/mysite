@extends('layouts.app')


@section('content')

<section class="heading-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-5">
                <p class="text-justify text-white   ">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
        </div>
    </div>
</section>


<section class="home-section">
    <div class="container">

        <h3 class="text-center text-white">Hello Project</h3>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card shadow">
                <img src="{{ url('frontend/img/main.jpeg') }}" alt="image placeholder" id="imgplace" class="img-fluid">
                    <div class="card-body">
                        <h5>Card Title</h5>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow">
                <img src="{{ url('frontend/img/main.jpeg') }}" alt="image placeholder" id="imgplace" class="img-fluid">
                    <div class="card-body">
                        <h5>Card Title</h5>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card shadow">
                <img src="{{ url('frontend/img/main.jpeg') }}" alt="image placeholder" id="imgplace" class="img-fluid">
                    <div class="card-body">
                        <h5>Card Title</h5>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
