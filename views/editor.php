<?php
    echo form_open('web_server/sites/save_file/'.$chemin);
    echo form_header('Editor'); ?>

    <textarea rows="13" class='form-control' name="editor_text">

    </textarea>

    <p></p>
    <input class="btn btn-primary" type="submit" value="Save"/>
    

<?php
    echo form_footer();
    echo form_close();
?>


