<?php

/**
 * Questo file contiene tutte le modifiche applicate per il corretto funzionamento del Customizer
 */

function skam_impostazioni( $wp_customize ) {

    $wp_customize->add_section( 'theme_tools', array(
        'title' => __( 'Personalizza il tema', 'skam' ),
        'description' => __( 'Utilizza le opzioni incluse per personalizzare il tema.' ),
        'priority' => 160,
    ));

    $wp_customize->add_setting( 'col_footer', array(
        'default' => 2,
    ));

    $wp_customize->add_control( 'col_footer', array(
        'label' => __( 'Colonne Footer', 'skam' ),
        'description' => __( 'Seleziona dal menu a tendina il numero di colonne da usare.', 'skam' ),
        'section' => 'theme_tools',
        'type' => 'select',
        'choices' => array( //Utile per impostare dei limiti
            '1' => 1,
            '2' => 2,
            '3' => 3,
            '4' => 4
        ),
     ));
}
add_action( 'customize_register', 'skam_impostazioni' );
