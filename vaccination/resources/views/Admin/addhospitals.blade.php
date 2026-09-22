
<style>

    .hospital-page {
        min-height: 100vh;
        background: #f4fbfb;
        padding: 50px;
        display: flex;
        justify-content: center;
        align-items: flex-start;
    }

    .hospital-form {
        width: 100%;
        max-width: 650px;
        background: white;
        padding: 40px;
        border-radius: 22px;
        border: 1px solid #e1eeee;
        box-shadow: 0 15px 45px rgba(8, 127, 140, 0.12);
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
        color: #17324d;
        font-size: 30px;
        margin: 10px 0;
    }

    .form-heading p {
        color: #718394;
        font-size: 14px;
        margin: 0;
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
    }

    .error {
        color: #d9534f;
        font-size: 13px;
        margin-top: 5px;
    }

</style>


<div class="hospital-page">

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


        <form
    
    action="{{ route('storehospital') }}"
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
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <!-- Email -->

            <div class="form-group">

                <label for="email">
                    Hospital Email
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="hospital@example.com"
                    value="{{ old('email') }}"
                    required
                >

                @error('email')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <!-- Password -->

            <div class="form-group">

                <label for="password">
                    Password
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Enter hospital password"
                    required
                >

                @error('password')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <!-- Address -->

            <div class="form-group">

                <label for="address">
                    Hospital Address
                </label>

                <input
                    type="text"
                    id="address"
                    name="address"
                    placeholder="Enter complete hospital address"
                    value="{{ old('address') }}"
                    required
                >

                @error('address')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <!-- Hospital Image -->

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
                    <div class="error">
                        {{ $message }}
                    </div>
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
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <!-- Submit -->

            <button
                type="submit"
                class="submit-btn">
                Add Hospital
            </button>


        </form>

    </div>

</div>

