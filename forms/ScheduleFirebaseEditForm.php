<?php
/** Pagina para salvar as configurações do Firebase*/

function ScheduleFirebaseEditForm() {
    if( isset( $_POST['firebaseConfig'] ) ){
        update_option('firebaseOptions',$_POST['firebaseConfig']);
        echo "<div class=\"updated\"><p><strong>Salvo!</strong></p></div>";
    }
    
    ?>
    <div class="container">
        
        <div class="card">
            <div class="card-body">
            <div class="alert alert-warning" role="alert">
                <p>A configuraçao do firebase esta em "settings / add firebase em seu aplicativo web"</p>
                <p>algo como a estrutura abaixo</p>
                <hr>
                {<br>
                    apiKey: "********",<br>
                    authDomain: "********",<br>
                    databaseURL: "********",<br>
                    projectId: "********",<br>
                    storageBucket: "********",<br>
                    messagingSenderId: "********"<br>
                }
            </div>
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Cole a configuraçao abaixo</label>
                        <textarea class="form-control" rows="6" name="firebaseConfig" ><?php echo stripslashes( get_option( 'firebaseOptions' ) ) ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
    
    
    <?php
}