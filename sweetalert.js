function AlertCrearUsuario(){
    Swal.fire(
        'Usuario creado!',
        'Usuario añadido correctamente.',
        'success'
      )
}

function AlertBorrarUsuario(){
    Swal.fire(
        Swal.fire({
            title: 'Deseas eliminar este usuario?',
            text: "No lo podrás recuperar más tarde.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminar'
          }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire(
                'Eliminado!',
                'Usuario eliminado.',
                'success'
              )
            }
          })
      )
}

function AlertModificarUsuario(){
    Swal.fire(
        'Usuario modificado!',
        'Usuario modificado correctamente.',
        'success'
      )
}

function UsuarioIncorrecto(){
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Correo o contraseña incorrectas!',
      })
}

