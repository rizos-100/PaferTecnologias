const funcionInit = () => {
    if (!"geolocation" in navigator) {
        return alert("Tu navegador no soporta el acceso a la ubicación. Intenta con otro");
    }

    const onUbicacionConcedida = ubicacion => {
        let ubi = ubicacion.coords.latitude + ',' + ubicacion.coords.longitude;
        addInfo(ubi);
    }

    const onErrorDeUbicacion = err => {
        addInfo('0,0');
        console.log("Error obteniendo ubicación: ", err);
    }

    const opcionesDeSolicitud = {
        enableHighAccuracy: true, // Alta precisión
        maximumAge: 0, // No queremos caché
        timeout: 5000 // Esperar solo 5 segundos
    };
    // Solicitar
    navigator.geolocation.getCurrentPosition(onUbicacionConcedida, onErrorDeUbicacion, opcionesDeSolicitud);

};



const addInfo = (ubicacion) => {

    let jsonData = {
        "pagina": "Pafer Tecnologias",
        "ubicacion": ubicacion
    };

    const options = {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(jsonData)
    };

    fetch("https://app-page.pafertecnologias.com/api/infopage/add", options)
        .then(response => response.json())
        .then(data => {
            console.log(data);
        });

};

funcionInit();
