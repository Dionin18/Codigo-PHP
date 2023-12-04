<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">

            <form action="procesar.php" method="POST" enctype="multipart/form-data">

                <label for="nombre" class="form-label">Nombres:</label>
                <input type="text" name="nombre" id="nombre" class="form-control">

                <br>

                <label for="apellidop" class="form-label">Apellido Paterno:</label>
                <input type="text" name="apellidop" id="apellidop" class="form-control">

                <br>

                <label for="apellidom" class="form-label">Apellido Materno:</label>
                <input type="text" name="apellidom" id="apellidom" class="form-control">

                <br><br>

                <select class="form-select" aria-label="Default select example" id="nacionalidad">
                    <option selected disabled>Seleccione su nacionalidad:</option>
                    <option value="chileno">Chileno</option>
                    <option value="extranjero">Extranjero</option>
                </select>

                <br>

                <label for="rut" class="form-label">Rut:</label>
                <input type="text" name="rut" id="rut" class="form-control">

                <br>

                <label for="lugar" class="form-label">Lugar de nacimiento:</label>
                <input type="text" name="lugar" id="lugar" class="form-control">

                <br>

                <label for="profesion" class="form-label">Profesión:</label>
                <input type="text" name="profesion" id="profesion" class="form-control">

                <br>

                <label for="fecha" class="form-label">Fecha:</label>
                <input type="date" name="fecha" id="fecha" class="form-control">

                <br>

                <label class="form-label">Sexo:</label>

                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">
                                <input type="radio" id="masculino" name="sexo" value="M">
                                <label for="masculino">Masculino</label>   
                            </th>

                            <th scope="col">
                                <input type="radio" id="femenino" name="sexo" value="F">
                                <label for="femenino">Femenino</label>
                            </th>

                            <th scope="col">
                                <input type="radio" id="otro" name="sexo" value="O">
                                <label for="otro">Otro</label>
                            </th>
                        </tr>
                    </thead>
                </table>
                
                <br>

                <label class="form-label">Esta inscrito en el registro de discapacidad?</label>

                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">
                                <input type="radio" id="discapSi" name="discapacidad" value="Si">
                                <label for="disSi">Si</label>   
                            </th>

                            <th scope="col">
                                <input type="radio" id="discapNo" name="discapacidad" value="No">
                                <label for="disNo">No</label>
                            </th>
                        </tr>
                    </thead>
                </table>
                
                <br>

                <label class="form-label">Es donante?</label>

                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">
                                <input type="radio" id="donaSi" name="donante" value="Si">
                                <label for="disSi">Si</label>   
                            </th>

                            <th scope="col">
                                <input type="radio" id="donaNo" name="donante" value="No">
                                <label for="disNo">No</label>
                            </th>
                        </tr>
                    </thead>
                </table>
                
                <br>
                <label for="foto" class="form-label">Foto:</label>
                <input type="file" name="foto" id="foto" class="form-control">

                <input type="submit" value="Enviar" class="btn btn-outline-primary btn-lg">
            </form>
            </div>
        </div>
    </div>
    
</body>
</html>
