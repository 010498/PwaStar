
// Ciclos de vida
self.addEventListener('install', event => {

	// Descargar Assets
	// Crear Cache


});



// Cuando el SW toma el control de la aplicacion
self.addEventListener('activate', event => {

	// Borrar cache viejo

});


// Manejo de cache
self.addEventListener('fetch', event => {


});



// SYNC: Recuperamos conexion a internet
self.addEventListener('sync', event => {

});



// Controlador de Notifcaciones PUSH
self.addEventListener('push', event => {

	console.log("Notificaciones recibidas");

})