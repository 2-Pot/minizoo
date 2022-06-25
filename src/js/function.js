$(document).ready(function(){
                            $('#btn').click(function () {
                                $.ajax("bonjour.php",//appel de bonjour.php sur le serveur web
                                  {
                                  type: "GET",
                                  success: function (resultat) {
                                  $("#result").html(resultat);
                                  }
                                });
                              });
                            });