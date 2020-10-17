<div>
    <div>
        <div class="container-login">
            <div class="form-login">
                <h1 class="heading-login">AndPerm</h1>
                <form action="/login" method="POST">
                    @csrf
                    <div class="email">
                        <input class="input" type="text" placeholder="email" name="email">
                        <div style="margin-top: 1rem">
                            @foreach($errors->get('email') as $message)
                                <label for="email">{{ $message }}</label>
                            @endforeach
                        </div>
                    </div>
                    <div class="password">
                        <input class="input" placeholder="password" type="password" name="password">
                        <div style="margin-top: 1rem">
                            @foreach($errors->get('password') as $message)
                                <label for="email">{{ $message }}</label>
                            @endforeach
                        </div>
                    </div>
                    <div class="submit">
                        <input class="button primary" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<style>

    .email{
        margin-bottom: 1.5rem;
    }

    .heading-login {
        font-size: 2rem;
        text-align: center;
        margin-bottom: 1rem;
    }

    .container-login {
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .form-login {
        width: 30%;
    }

    .password {
        margin-bottom: 1.5rem;
    }

</style>
