/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function archivo(evt) {
                var files = evt.target.files; // FileList object
                //Obtenemos la imagen del campo "file". 
                for (var i= 0, f; f = files[i]; i++) {
                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }
                    var reader = new FileReader();
                    reader.onload = (function (theFile) {
                        return function (e) {
                            // Creamos la imagen.
                            document.getElementById("list").innerHTML = ['<img class="thumb form-control" style="witdh:400px; height:400px;" src=" ', e.target.result, ' " title=" ', escape(theFile.name), ' "/>'].join('');
                        };
                    })(f);
                    reader.readAsDataURL(f);
                }
            }
            document.getElementById('files').addEventListener('change', archivo, false);
    




