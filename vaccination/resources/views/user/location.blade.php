
@extends('user.sidebar')
@section('user')

    <!-- Hospitals -->

    <section class="hospital-section">

        <div class="heading">

            <span>VACCICARE</span>

            <h1>Our Vaccination Hospitals</h1>

            <p>
                Find a trusted hospital and book your vaccination appointment.
            </p>

        </div>


        <div class="hospital-grid">

            @foreach($hospitals as $hospital)

                <div class="hospital-card">

                    <div class="hospital-image">

                        <img
                            src="{{ asset('Admin/assets/images/hospitals/' . $hospital->image) }}"
                            alt="{{ $hospital->name }}"
                        >

                    </div>


                    <div class="hospital-content">

                        <h2>
                            {{ $hospital->name }}
                        </h2>

                        <div class="location">
                            📍 {{ $hospital->location }}
                        </div>


                        <div class="vaccine-title">
                            Available Vaccines
                        </div>

                        <div class="vaccines">
@foreach($hospitals as $hospital)

    <h2>{{ $hospital->name }}</h2>

    <p>{{ $hospital->location }}</p>

@endforeach

                        </div>


                        <a
                            href="{{ route('hospitals') }}"
                            class="appointment-btn"
                        >
                            Book Appointment →
                        </a>

                    </div>

                </div>

            @endforeach

        </div>

    </section>

</body>
</html>
@endsection