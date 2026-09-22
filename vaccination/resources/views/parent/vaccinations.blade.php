@extends('parent.sidebard')
 @section('parent')




    <style>

        body {
            font-family: Arial, sans-serif;
            background: #f5f7fa;
            margin: 0;
       padding-bottom: 90px;
        }

        

        h1 {
            margin-bottom: 30px;
        }

        .child-card {
            background: white;
            padding: 25px;
            margin-bottom: 30px;
            border-radius: 12px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.08);
        }

        .child-name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .child-dob {
            color: #666;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #f1f3f5;
            padding: 14px;
            text-align: left;
        }

        td {
            padding: 14px;
            border-bottom: 1px solid #eee;
        }

        .completed {
            color: green;
            font-weight: bold;
        }

        .due {
            color: red;
            font-weight: bold;
        }

        .upcoming {
            color: #d88a00;
            font-weight: bold;
        }

    </style>

</head>

<body>

<div class="container">

    <h1>My Children's Vaccination</h1>


    @forelse($data as $childData)

        @php
            $child = $childData['child'];
        @endphp


        <div class="child-card">

            <div class="child-name">
                {{ $child->Child_Name }}
            </div>

            <div class="child-dob">

                Date of Birth:
                {{ \Carbon\Carbon::parse($child->DOB)->format('d M Y') }}

            </div>


            <table>

                <thead>

                    <tr>

                        <th>Vaccine</th>

                        <th>Dose</th>

                        <th>Target Age</th>

                        <th>Due Date</th>

                        <th>Status</th>
                        <th>booking</th>

                    </tr>

                </thead>


                <tbody>
@foreach($childData['vaccines'] as $item)

    <tr>

        <td>
            {{ $item['vaccine']->Vaccine_Name }}
        </td>

        <td>
            {{ $item['vaccine']->Dose_Number }}
        </td>

        <td>
            {{ $item['vaccine']->Target_Age }}
        </td>

        <td>
            {{ $item['due_date']->format('d M Y') }}
        </td>

        <td>

            @if($item['status'] == 'Completed')

                <span class="completed">
                    ✓ Completed
                </span>

            @elseif($item['status'] == 'Due')

                <span class="due">
                    ⚠ Due
                </span>

            @else

                <span class="upcoming">
                    Upcoming
                </span>

            @endif

        </td>

        

<td>

    @if($item['status'] == 'Due')

        {{-- Appointment already exists --}}
        @if($item['appointment'])

            @if($item['appointment']->status == 'Pending')

                <span class="btn btn-warning btn-sm fs-5 p-2">
                    pending
                    <br>
                  
                </span>


            @elseif($item['appointment']->status == 'Approved')

                <span class="btn btn-success btn-sm">
                    Appointment Approved
                </span>


            @elseif($item['appointment']->status == 'Rejected')

                <a href="{{ route('appointment.create', [
                    'child_id' => $child->id,
                    'vaccination_id' => $item['vaccine']->id
                ]) }}"
                class="btn btn-primary">

                    Book Appointment

                </a>

            @endif


        @else

            {{-- No appointment yet --}}

            <a href="{{ route('appointment.create', [
                'child_id' => $child->id,
                'vaccination_id' => $item['vaccine']->id
            ]) }}"
            class="btn btn-primary">

                Book Appointment

            </a>

        @endif


    @elseif($item['status'] == 'Completed')

        <span class="completed">
            Vaccinated
        </span>


    @else

        <span class="text-muted">
            Not Due
        </span>

    @endif

</td>



        

    </tr>

@endforeach

                </tbody>

            </table>

        </div>


    @empty

        <div class="child-card">

            <h3>No Child Found</h3>

            <p>
                You don't have any child registered.
            </p>

        </div>

    @endforelse


</div>

</body>

</html>
@endsection