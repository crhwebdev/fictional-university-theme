# DESCRIPTION

A custom WordPress theme for a fictional university. Created for Udemy course: Become a Wordpress Developer: Unlocking Power With Code

# INSTALLATION

Place the contents of this repository in your `app/public/wp-content` folder.

# ABOUT

## mu-plugins

This folder contains php files that are loaded in automatically at startup by wordpress as plugins. The university-post-types.php file contains the primary functions that are used by the theme. Right now, this adds the custom event post type.

## requried plugins

### Advanced Custom Fields, Version 5.8.2, Eliot Condon

1. Install Plugin through wordpress control panel plugins
2. Click on Custom Fields tab and add a new field group with the following

- Field Label: Event Date
- Field Type: Date Picker
- Required? Yes
- Location Rules: Post Type is equal to Events
- Return Format: F j, Y (third option)

3. Save the custom field by clicking on 'Publish'
