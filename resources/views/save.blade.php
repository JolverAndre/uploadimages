<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js">

    </script>
  </head>
  <body>
    <div class="container">

      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="panel panel-default">
            <div class="panel-heading">Agregar archivos</div>
              <div class="panel-body">
                <form method="POST" action="/storage/create" accept-charset="UTF-8" enctype="multipart/form-data">

                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <select  name="lugar" id="lugar">

                  </select>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Nuevo Archivo</label>
                    <div class="col-md-6">
                      <input type="file" class="form-control" name="file" >
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                      <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
          let lugar=document.getElementById("lugar");
          (function(){
            axios.get("http://www.gotoshopec.com/api.php/api/lugares")
                .then(function (response) {
                  let cad="";

                  for(let i of response.data){
                    cad += "<option value='"+i.id+"'>"+i.razon_social+"</option>";
                  }
                  lugar.innerHTML = cad;
                })
                .catch(function (error) {
                  console.log(error);
                });

          })(axios)
      </script>
  </body>
</html>
