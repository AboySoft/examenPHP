function traeInfoCP(dataInfo){
    console.log(info);
    var info = JSON.parse(dataInfo);
    document.getElementById("colonia").options.length=0;

    select = document.getElementById("colonia");

    for (var i = 0; i < info.length; i++) {
        //SE GENERAN ASENTA,MIENTOS Y SE CREAN OPTION PARA SELECT
        var ciudadJ= info[i].response.asentamiento;
        let option3 = document.createElement("option");
        option3.setAttribute("value", ciudadJ);
        let option3Texto = document.createTextNode(ciudadJ);
        option3.appendChild(option3Texto);
        select.appendChild(option3);

        //SE ASIGNA MUNICIPIO
        document.getElementById("municipio").value=info[i].response.municipio;
        //SE ASIGNA CIUDAD
        document.getElementById("ciudad").value=info[i].response.ciudad;
        //SE ASIGNA ESTADO
        document.getElementById("edo").value=info[i].response.estado;
        //SE ASIGNA PAIS
        document.getElementById("pais").value=info[i].response.pais;



        console.log(ciudadJ);
    }
      
}

function generaCP(){
    var cp = document.getElementById("cpS").value;

    if(window.XMLHttpRequest) {
        ajax = new XMLHttpRequest()
    }
                            
    ajax.onreadystatechange=function(){
        if (ajax.readyState==4 && ajax.status==200){        
            
            var data = ajax.responseText;
            
            //console.log(data);

            var info = [
                {
                    "error": false,
                    "code_error": 0,
                    "error_message": null,
                    "response": {
                        "cp": "50075",
                        "asentamiento": "Las Torres",
                        "tipo_asentamiento": "Fraccionamiento",
                        "municipio": "Toluca",
                        "estado": "México",
                        "ciudad": "Toluca de Lerdo",
                        "pais": "México"
                    }
                },
                {
                    "error": false,
                    "code_error": 0,
                    "error_message": null,
                    "response": {
                        "cp": "50075",
                        "asentamiento": "Científicos",
                        "tipo_asentamiento": "Colonia",
                        "municipio": "Toluca",
                        "estado": "México",
                        "ciudad": "Toluca de Lerdo",
                        "pais": "México"
                    }
                }
            ];

            traeInfoCP(data);
            
        }else{ 
            //alert("Error comunicación ajax con cp: "+cp);
        }
    }
                            
    ajax.open("POST","controllers/verificaCP.php",true)
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
    ajax.send("&cp="+cp)

}