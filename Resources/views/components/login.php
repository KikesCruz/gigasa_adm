<?php 
require APP_ROOT . 'resources/views/shared/header.php';
?>

<body>
    <main>
        <div class='contianer d-flex'>
            <div class='col-12 p-2 d-flex align-items-center justify-content-center'>
                <div>
                    <div class='form-detail p-3'>
                        <img width='320px' height='320px' src='./img/icon.png' alt=''>
                    </div>

                    <div class='form-input p-3'>
                        <form action='./home' method='POST'>
                            <!-- Email input -->
                            <div class='form-outline mb-4'>
                                <input name='email' type='text' id='form1Example1' class='form-control' />
                            </div>

                            <!-- Password input -->
                            <div class='form-outline mb-4'>
                                <input name='pass' type='password' id='form1Example2' class='form-control' />
                            </div>

                            <!-- Submit button -->
                            <button type='submit' class='btn btn-warning'>
                                Inicia Sesión
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </main>

<?php require APP_ROOT . 'resources/views/shared/footer.php';
?>