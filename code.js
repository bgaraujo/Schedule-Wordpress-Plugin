  // Initialize Firebase

    jQuery(function($) {
        $(document).ready(function(){

            // Firebase config
            
            var config = {
                apiKey: "AIzaSyAKFsnmVhNpqFMNXe3yu512YbWButJex8c",
                authDomain: "schedule-e372c.firebaseapp.com",
                databaseURL: "https://schedule-e372c.firebaseio.com",
                projectId: "schedule-e372c",
                storageBucket: "schedule-e372c.appspot.com",
                messagingSenderId: "290646979133"
            };
            firebase.initializeApp(config);

            // obtem a lista de dados
            var database = firebase.database().ref('schedules');
            database.on('value', function(snapshot){
                jQuery("#schedule-table tbody tr").remove();
                snapshot.forEach(function(childSnapshot) {
                    
                    var schedule = childSnapshot.val();
                    var date = new Date(schedule.date);
                    var button = {
                        class:"btn-secondary",
                        text:"Habilitar"
                    }

                    if(schedule.enabled){
                        button.class = "btn-primary";
                        button.text = "Cancelar";
                    }

                    jQuery("#schedule-table tbody").append(
                        "<tr>"+
                            "<th scope=\"row\">"+ date.getDate() +"/"+ date.getMonth() +"/"+ date.getFullYear() +"</th>"+
                            "<td>"+ schedule.specialty +"</td>"+
                            "<td>"+
                                "<div data-scheduleid=\""+childSnapshot.key+"\" data-scheduleapprove=\""+schedule.enabled+"\" class=\"btn "+ button.class +"\">"+button.text+"</button>"+
                            "</td>"+
                        "</tr>"
                    );
                });
            });

            jQuery(document).on( "click touch", "[data-scheduleapprove]" , function(){
                if (confirm("Deseja confirmat a consulta?")) {
                    database.child(jQuery(this).data("scheduleid")).update({
                        enabled:!jQuery(this).data("scheduleapprove")
                    });
                }
                
            });

        });
    });
