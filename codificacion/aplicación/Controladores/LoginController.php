< ? php
Espacio de nombres App \ Controllers;
use App \ Models \ LoginModel;
use CodeIgniter \ Controller;
class LoginController se extiende Controller
{
    privado $ inicio de sesión = ''  ;
    función pública __construct () {  
      
        $ this - > login = new LoginModel () ;        
    }
    
    // mostrar formulario de inicio de sesión
    índice de función pública () {        
        $ sesión = sesión () ;  
        $ sesión-> setFlashdata ( 'msg' , '' ) ;
    return view ( 'iniciar sesión' ) ; 
    }      
    // comprobar que el usuario existe o no
    inicio de sesión de función pública () {  
          
        $ data = array ( 'user_name' = > $ this - > request -> getVar ( 'user_id' ) , 'contraseña' = > md5 ( $ this - > request -> getVar ( 'contraseña' ))) ;       
        $ usuario =   $ esto - > iniciar sesión -> donde ( $ datos ) ;
        $ filas = $ esto - > iniciar sesión -> countAllResults () ;
        $ sesión = sesión () ;          
        si ( $ filas == 1 ) {
            return view ( 'éxito' ) ; 
        } más {
            $ sesión-> setFlashdata ( 'msg' , 'Usuario no válido' ) ;
            return view ( 'iniciar sesión' ) ; 
        } 
     }
}
