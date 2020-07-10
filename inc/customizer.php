<?php

function sarah_customize_register($wp_customize) {

$wp_customize -> add_panel(
  'blog',
  array(
    'title'         => 'Page blog'
  )
);

        $wp_customize -> add_section(
          'sidebar',
          array(
            'title'         => 'sidebar',
            'description'   => 'sidebar pour la page blog',
            'panel'         => 'blog'
          )
      );


        $wp_customize->add_setting(
          'sidebar-hidden',
          array(
          'default'     => false,
          'type'        => 'theme_mod'
          )
        );

        $wp_customize->add_control(
          'sidebar-hidden', 
          array( 
            'label'          => 'Masquer la sidebar',
            'description'    => 'Masquer la sidebar.',
            'section'        => 'sidebar', 
            'setting'        => 'sidebar-hidden', 
            'type'           => 'checkbox' 
          )
        );


  $wp_customize -> add_panel(
    'front_page',
    array(
      'title'         => 'Page d\'accueil principale'
    )
  );

      $wp_customize -> add_section(
        'banner',
        array(
          'title'         => 'Bannière',
          'description'   => 'image de couverture pour la page d\'accueil',
          'panel'         => 'front_page'
        )
    );

              $wp_customize->add_setting(
                'banner_image',
                array(
                  'default'     => get_template_directory() .'/assets/images/alex-bracken-unsplash.jpg',
                  'type'        => 'theme_mod' 
                )
              );

              $wp_customize->add_control(
                new WP_Customize_Image_control(
                $wp_customize, 
                'banner_image',
                array ( 
                  'label' => 'Image de fond',
                  'section' => 'banner', 
                  'setting' => 'banner_image' 
                    )
                )
              );


        $wp_customize -> add_section(
          'fp_texts',
          array(
            'title'         => 'Textes et styles de la bannière',
            'description'   => 'Réglages pour les textes de la page d\'accueil principale.',
            'panel'         => 'front_page'
          )
        );

              $wp_customize->add_setting(
                'fp_texts_title',
                array(
                'default'     => 'Bientôt en concert !',
                'type'        => 'theme_mod'
                )
              );

              $wp_customize->add_control(
                'fp_texts_title',
                array(
                  'label'          => 'Titre principal',
                  'description'    => 'Texte du titre principal',
                  'section'        => 'fp_texts',
                  'setting'        => 'fp_texts_title',
                  'type'           => 'text'
                )
              );

              $wp_customize->add_setting(
                'fp_texts_title_size',
                array(
                'default'     => 90,
                'type'        => 'theme_mod'
                )
              );

              $wp_customize->add_control(
                'fp_texts_title_size',
                array(
                  'label'          => 'Taille du titre',
                  'description'    => 'Taille du texte du titre principal',
                  'section'        => 'fp_texts',
                  'setting'        => 'fp_texts_title_size',
                  'type'           => 'number'
                )
              );


  $wp_customize -> add_section(
    'fp_button',
    array(
      'title'         => 'Bouton de la bannière',
      'description'   => 'Réglages pour le bouton de la page d\'accueil principale',
      'panel'         => 'front_page'
    )
  );

              $wp_customize->add_setting(
                'fp_button_text',
                array(
                'default'     => 'Réservez votre billet!',
                'type'        => 'theme_mod'
                )
              );
            
              $wp_customize->add_control(
                'fp_button_text',
                array(
                  'label'          => 'Bouton',
                  'description'    => 'Texte du bouton',
                  'section'        => 'fp_button',
                  'setting'        => 'fp_button_text',
                  'type'           => 'text'
                )
              );
            
              $wp_customize->add_setting(
                'fp_button_url',
                array(
                'default'     => '',
                'type'        => 'theme_mod'
                )
              );
            
              $wp_customize->add_control(
                'fp_button_url',
                array(
                  'label'          => 'Lien',
                  'description'    => 'Adresse URL du bouton',
                  'section'        => 'fp_button',
                  'setting'        => 'fp_button_url',
                  'type'           => 'url'
                )
              );

              $wp_customize->add_setting(
                'fp_button_style',
                array(
                'default'     => 'btn-style-1',
                'type'        => 'theme_mod'
                )
              );
            
              $wp_customize->add_control(
                'fp_button_style',
                array(
                  'label'          => 'Style',
                  'description'    => 'Style du bouton',
                  'section'        => 'fp_button',
                  'setting'        => 'fp_button_style',
                  'type'           => 'radio',
                  'choices'        => array(
                                        'btn-style-1' => 'Style 1',
                                        'btn-style-2' => 'Style 2',
                                        'btn-style-3' => 'Style 3'
                                      )
                )
              );

    $wp_customize -> add_section(
      'fp_container',
      array(
        'title'         => 'Conteneur',
        'description'   => 'Réglages du conteneur de la page d\'accueil principale',
        'panel'         => 'front_page'
      )
    );
  
          $wp_customize->add_setting(
            'fp_container_image',
            array(
            'default'   => get_template_directory() . '/assets/images/alex-bracken-unsplash.jpg',
            'type'      => 'theme_mod'
            )
          );

          $wp_customize->add_control(
            new WP_Customize_Image_control(
              $wp_customize,
              'fp_container_image',
              array(
                'label'   => 'Image de fond',
                'description'   => 'Image du conteneur de la page d\'accueil',
                'section' => 'fp_container',
                'setting'  => 'fp_container_image'
              )
            )
          );


    $wp_customize -> add_section(
      'fp_description',
      array(
        'title'         => 'Textes et styles de la description',
        'description'   => 'Réglages pour les textes de la page d\'accueil principale.',
        'panel'         => 'front_page'
      )
    );
      
                    $wp_customize->add_setting(
                      'fp_description_title',
                      array(
                      'default'     => 'Un super groupe de musique',
                      'type'        => 'theme_mod'
                      )
                    );
      
                    $wp_customize->add_control(
                      'fp_description_title',
                      array(
                        'label'          => 'Titre de la description',
                        'description'    => 'Texte de la description',
                        'section'        => 'fp_description',
                        'setting'        => 'fp_description_title',
                        'type'           => 'text'
                      )
                    );
      
                    $wp_customize->add_setting(
                      'fp_description_title_size',
                      array(
                      'default'     => 90,
                      'type'        => 'theme_mod'
                      )
                    );
      
                    $wp_customize->add_control(
                      'fp_description_title_size',
                      array(
                        'label'          => 'Taille du titre de la description',
                        'description'    => 'Taille du texte du titre de la description',
                        'section'        => 'fp_description',
                        'setting'        => 'fp_description_title_size',
                        'type'           => 'number'
                      )
                    );

                    $wp_customize->add_setting(
                      'fp_description_text',
                      array(
                      'default'     => 'Lorem ipsum dolor sit amet, consectetur adipisicing, sed do eiusmod tempor incididunt.',
                      'type'        => 'theme_mod'
                      )
                    );
      
                    $wp_customize->add_control(
                      'fp_description_text',
                      array(
                        'label'          => 'Texte de la description',
                        'description'    => 'Texte de la description',
                        'section'        => 'fp_description',
                        'setting'        => 'fp_description_text',
                        'type'           => 'text'
                      )
                    );
      
                    $wp_customize->add_setting(
                      'fp_description_text_size',
                      array(
                      'default'     => 90,
                      'type'        => 'theme_mod'
                      )
                    );
      
                    $wp_customize->add_control(
                      'fp_description_text_size',
                      array(
                        'label'          => 'Taille du titre de la description',
                        'description'    => 'Taille du texte du titre de la description',
                        'section'        => 'fp_description',
                        'setting'        => 'fp_description_text_size',
                        'type'           => 'number'
                      )
                    );

                    $wp_customize->add_setting(
                      'fp_button_description-text',
                      array(
                      'default'     => 'En savoir plus',
                      'type'        => 'theme_mod'
                      )
                    );
                  
                    $wp_customize->add_control(
                      'fp_button_description-text',
                      array(
                        'label'          => 'Bouton',
                        'description'    => 'Texte du bouton',
                        'section'        => 'fp_description',
                        'setting'        => 'fp_button_description-text',
                        'type'           => 'text'
                      )
                    );
                  
                    $wp_customize->add_setting(
                      'fp_button_description_url',
                      array(
                      'default'     => '',
                      'type'        => 'theme_mod'
                      )
                    );
                  
                    $wp_customize->add_control(
                      'fp_button_description_url',
                      array(
                        'label'          => 'Lien',
                        'description'    => 'Adresse URL du bouton',
                        'section'        => 'fp_button_description-text',
                        'setting'        => 'fp_button_description_url',
                        'type'           => 'url'
                      )
                    );
      
                    $wp_customize->add_setting(
                      'fp_button_description_style',
                      array(
                      'default'     => 'btn-style-1',
                      'type'        => 'theme_mod'
                      )
                    );
                  
                    $wp_customize->add_control(
                      'fp_button_description_style',
                      array(
                        'label'          => 'Style',
                        'description'    => 'Style du bouton',
                        'section'        => 'fp_description',
                        'setting'        => 'fp_button_description_style',
                        'type'           => 'radio',
                        'choices'        => array(
                                              'btn-style-1' => 'Style 1',
                                              'btn-style-2' => 'Style 2',
                                              'btn-style-3' => 'Style 3'
                                            )
                      )
                    );

    $wp_customize -> add_section(
      'custom_block_1',
      array(
        'title'         => 'Textes et styles du custom block 1',
        'description'   => 'Réglages pour les textes du custom block 1.',
        'panel'         => 'front_page'
      )
    );
                      
                  $wp_customize->add_setting(
                    'custom_block_1_title',
                    array(
                    'default'     => 'Concert célébration',
                    'type'        => 'theme_mod'
                    )
                  );
                      
                  $wp_customize->add_control(
                    'custom_block_1_title',
                    array(
                      'label'          => 'Titre du custom block 1',
                      'description'    => 'Texte du custom block 1',
                      'section'        => 'custom_block_1',
                      'setting'        => 'custom_block_1_title',
                      'type'           => 'text'
                    )
                  );
                      
                  $wp_customize->add_setting(
                    'custom_block_1_title_size',
                    array(
                    'default'     => 90,
                    'type'        => 'theme_mod'
                    )
                  );
    
                  $wp_customize->add_control(
                    'custom_block_1_title_size',
                    array(
                      'label'          => 'Taille du titre du custom block 1',
                      'description'    => 'Taille du texte du titre du custom block 1',
                      'section'        => 'custom_block_1',
                      'setting'        => 'custom_block_1_title_size',
                      'type'           => 'number'
                    )
                  );
                
                  $wp_customize->add_setting(
                    'custom_block_1_text',
                    array(
                    'default'     => 'Lorem ipsum dolor sit amet, consectetur adipisicing, sed do eiusmod tempor incididunt.',
                    'type'        => 'theme_mod'
                    )
                  );
    
                  $wp_customize->add_control(
                    'custom_block_1_text',
                    array(
                      'label'          => 'Texte du custom block 1',
                      'description'    => 'Texte du custom block 1',
                      'section'        => 'custom_block_1',
                      'setting'        => 'custom_block_1_text',
                      'type'           => 'text'
                    )
                  );
                      
                  $wp_customize->add_setting(
                    'custom_block_1_text_size',
                    array(
                    'default'     => 90,
                    'type'        => 'theme_mod'
                    )
                  );
                      
                  $wp_customize->add_control(
                    'custom_block_1_text_size',
                    array(
                      'label'          => 'Taille du custom block 1',
                      'description'    => 'Taille du custom block 1',
                      'section'        => 'custom_block_1',
                      'setting'        => 'custom_block_1_text_size',
                      'type'           => 'number'
                    )
                  );      

    $wp_customize -> add_section(
      'custom_block_2',
      array(
        'title'         => 'Textes et styles du custom block 2',
        'description'   => 'Réglages pour les textes du custom block 2.',
        'panel'         => 'front_page'
      )
    );
                                    
              $wp_customize->add_setting(
                'custom_block_2_title',
                array(
                'default'     => 'L\'amour de la musique',
                'type'        => 'theme_mod'
                )
              );
                  
              $wp_customize->add_control(
                'custom_block_2_title',
                array(
                  'label'          => 'Titre du custom block 2',
                  'description'    => 'Texte du custom block 2',
                  'section'        => 'custom_block_2',
                  'setting'        => 'custom_block_2_title',
                  'type'           => 'text'
                )
              );
                  
              $wp_customize->add_setting(
                'custom_block_2_title_size',
                array(
                'default'     => 90,
                'type'        => 'theme_mod'
                )
              );

              $wp_customize->add_control(
                'custom_block_2_title_size',
                array(
                  'label'          => 'Taille du titre du custom block 2',
                  'description'    => 'Taille du texte du titre du custom block 2',
                  'section'        => 'custom_block_2',
                  'setting'        => 'custom_block_2_title_size',
                  'type'           => 'number'
                )
              );
            
              $wp_customize->add_setting(
                'custom_block_2_text',
                array(
                'default'     => 'Lorem ipsum dolor sit amet, consectetur adipisicing, sed do eiusmod tempor incididunt.',
                'type'        => 'theme_mod'
                )
              );

              $wp_customize->add_control(
                'custom_block_2_text',
                array(
                  'label'          => 'Texte du custom block 2',
                  'description'    => 'Texte du custom block 2',
                  'section'        => 'custom_block_2',
                  'setting'        => 'custom_block_2_text',
                  'type'           => 'text'
                )
              );
                                    
              $wp_customize->add_setting(
                'custom_block_2_text_size',
                array(
                'default'     => 90,
                'type'        => 'theme_mod'
                )
              );
                  
              $wp_customize->add_control(
                'custom_block_2_text_size',
                array(
                  'label'          => 'Taille du custom block 2',
                  'description'    => 'Taille du custom block 2',
                  'section'        => 'custom_block_2',
                  'setting'        => 'custom_block_2_text_size',
                  'type'           => 'number'
                )
              );      
              
    $wp_customize -> add_section(
      'custom_block_3',
      array(
        'title'         => 'Textes et styles du custom block 3',
        'description'   => 'Réglages pour les textes du custom block 3.',
        'panel'         => 'front_page'
      )
    );
                                              
            $wp_customize->add_setting(
              'custom_block_3_title',
              array(
              'default'     => '+ de 3000 tickets en vente',
              'type'        => 'theme_mod'
              )
            );
                
            $wp_customize->add_control(
              'custom_block_3_title',
              array(
                'label'          => 'Titre du custom block 3',
                'description'    => 'Texte du custom block 3',
                'section'        => 'custom_block_3',
                'setting'        => 'custom_block_3_title',
                'type'           => 'text'
              )
            );
                            
            $wp_customize->add_setting(
              'custom_block_3_title_size',
              array(
              'default'     => 90,
              'type'        => 'theme_mod'
              )
            );

            $wp_customize->add_control(
              'custom_block_3_title_size',
              array(
                'label'          => 'Taille du titre du custom block 3',
                'description'    => 'Taille du texte du titre du custom block 3',
                'section'        => 'custom_block_3',
                'setting'        => 'custom_block_3_title_size',
                'type'           => 'number'
              )
            );
                      
            $wp_customize->add_setting(
              'custom_block_3_text',
              array(
              'default'     => 'Lorem ipsum dolor sit amet, consectetur adipisicing, sed do eiusmod tempor incididunt.',
              'type'        => 'theme_mod'
              )
            );

            $wp_customize->add_control(
              'custom_block_3_text',
              array(
                'label'          => 'Texte du custom block 3',
                'description'    => 'Texte du custom block 3',
                'section'        => 'custom_block_3',
                'setting'        => 'custom_block_3_text',
                'type'           => 'text'
              )
            );
                                  
            $wp_customize->add_setting(
              'custom_block_3_text_size',
              array(
              'default'     => 90,
              'type'        => 'theme_mod'
              )
            );
                            
            $wp_customize->add_control(
              'custom_block_3_text_size',
              array(
                'label'          => 'Taille du custom block 3',
                'description'    => 'Taille du custom block 3',
                'section'        => 'custom_block_3',
                'setting'        => 'custom_block_3_text_size',
                'type'           => 'number'
              )
            );      

    $wp_customize -> add_section(
      'fp_quote',
      array(
        'title'         => 'Citation',
        'description'   => 'Réglages pour la citation',
        'panel'         => 'front_page'
      )
    );
          
          $wp_customize->add_setting(
              'fp_quote_text',
              array(
              'default'     => 'Ce qui se conçoit bien s\'énonce clairement et les choses pour le dire arrive aisément.',
              'type'        => 'theme_mod'
              )
            );
          

          $wp_customize->add_control(
              'fp_quote_text',
              array(
                'label'          => 'Citation',
                'description'    => 'Texte de la citation',
                'section'        => 'fp_quote',
                'setting'        => 'fp_quote_text',
                'type'           => 'textarea'
              )
            );
          
            $wp_customize->add_setting(
              'fp_quote_source',
              array(
              'default'     => 'Boileau',
              'type'        => 'theme_mod'
              )
            );
          
            $wp_customize->add_control(
              'fp_quote_source',
              array(
                'label'          => 'Source',
                'description'    => 'Nom de l\'auteur de la citation',
                'section'        => 'fp_quote',
                'setting'        => 'fp_quote_source',
                'type'           => 'text'
              )
            );
          
$wp_customize->add_section(
    'footer',
      array(
        'title' => 'Footer',
        'description'   => 'Personnalisation du bas de page'
      )
    );

            $wp_customize->add_setting(
              'copyright_text',
              array(
                'default' => 'Tous droits réservés',
                'type' => 'theme_mod'
              )
            );
            
            $wp_customize->add_control(
              'copyright_text',
              array(
                'label' => 'Texte copyright',
                'description' => 'Texte du champ copyright',
                'section' => 'footer',
                'setting' => 'copyright_text',
                'type' => 'text'
              )
            );

}

add_action('customize_register', 'sarah_customize_register');

?>