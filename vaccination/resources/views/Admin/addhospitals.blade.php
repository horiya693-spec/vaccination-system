<!DOCTYPE html>
<html>
<head>

    <title>Add Hospital | VacciCare</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4fbfb;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .hospital-form {
            width: 100%;
            max-width: 650px;
            background: white;
            padding: 40px;
            border-radius: 22px;
            box-shadow: 0 15px 45px rgba(8, 127, 140, 0.12);
            border: 1px solid #e1eeee;
        }

        .form-heading {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-heading span {
            color: #087f8c;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 3px;
        }

        .form-heading h2 {
            margin: 10px 0;
            color: #17324d;
            font-size: 30px;
        }

        .form-heading p {
            color: #718394;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #294956;
            font-size: 14px;
            font-weight: 600;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            border: 1px solid #d7e8e8;
            border-radius: 11px;
            padding: 13px 15px;
            font-size: 14px;
            outline: none;
            background: #fbfefe;
        }

        .form-group input {
            height: 50px;
        }

        .form-group textarea {
            height: 110px;
            resize: none;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #087f8c;
            box-shadow: 0 0 0 4px rgba(8, 127, 140, 0.08);
        }

        .submit-btn {
            width: 100%;
            height: 52px;
            border: none;
            border-radius: 11px;
            background: #087f8c;
            color: white;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: .3s;
        }

        .submit-btn:hover {
            background: #05636d;
            transform: translateY(-2px);
        }

        .success {
            background: #e8f8f5;
            color: #087f8c;
            padding: 12px;
            border-radius: 9px;
            margin-bottom: 20px;
            text-align: center;
            font-size: 14px;
        }

        .error {
            color: #d9534f;
            font-size: 13px;
            margin-top: 5px;
        }
    </style>

</head>

<body>

<div class="hospital-form">

    <div class="form-heading">

        <span>VACCICARE ADMIN</span>

        <h2>Add Hospital</h2>

        <p>
            Add a vaccination hospital to display it on the website.
        </p>

    </div>


    @if(session('success'))

        <div class="success">
            {{ session('success') }}
        </div>

    @endif


    <form action="{{ route('hospital.store') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf


        <!-- Hospital Name -->

        <div class="form-group">

            <label for="name">
                Hospital Name
            </label>

            <input
                type="text"
                id="name"
                name="name"
                placeholder="Enter hospital name"
                value="{{ old('name') }}"
                required
            >

            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror

        </div>


        <!-- Location -->

        <div class="form-group">

            <label for="location">
                Hospital Location
            </label>

            <input
                type="text"
                id="location"
                name="location"
                placeholder="e.g. Gulshan-e-Iqbal, Karachi"
                value="{{ old('location') }}"
                required
            >

            @error('location')
                <div class="error">{{ $message }}</div>
            @enderror

        </div>


        <!-- Image -->

        <div class="form-group">

            <label for="image">
                Hospital Image
            </label>

            <input
                type="file"
                id="image"
                name="image"
                accept="image/*"
                required
            >

            @error('image')
                <div class="error">{{ $message }}</div>
            @enderror

        </div>


        <!-- Description -->

        <div class="form-group">

            <label for="description">
                Hospital Description
            </label>

            <textarea
                id="description"
                name="description"
                placeholder="Enter a short description about the hospital..."
            >{{ old('description') }}</textarea>

            @error('description')
                <div class="error">{{ $message }}</div>
            @enderror

        </div>


        <button type="submit" class="submit-btn">
            Add Hospital
        </button>

    </form>

</div>

</body>
</html>