<?php


    class main{
        function __construct(){
            /* p= contenu de la de url ?p=perso.suppression&id=9*/
            $CurPage = &$_GET['p'];
            $page = array(
                'dete.ajout' => array( 'class' => 'dete' , 'method' => 'ajout' ),
                'dete.suppression' => array( 'class' => 'dete' , 'method' => 'suppression' ),
                'dete.liste' => array( 'class' => 'dete' , 'method' => 'liste' ),
                'dete.details' => array( 'class' => 'dete' , 'method' => 'details' ),
            );
            if( isset( $page[$CurPage] ) ){
                $method = $page[$CurPage]['method'];
                $CurClass = $page[$CurPage]['class'];
            } else {
                $method = 'liste';
                $CurClass = 'dete';
            }
            include_once( $CurClass.'.php' );
            $CurObjet = new $CurClass();
            echo $CurObjet->$method();
        }

        function __destruct(){
        }

    }
