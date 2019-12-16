// render HTML 

<form method="POST" action="<?=$form->encode($_SERVER['PHP_SELF'])?>">
<table>
    <?php if($errors) { ?>
        <tr>
            <td> following error occurs!</td>
            <td> 
                <ul>
                    <?php foreach($errors as $error) {?>
                        <li>
                            <?=$form->encode($errors)?>
                        </li>
                    <?php {?>
                </ul>
            </td>
        </tr>
    <?php } ?>

        <tr>
            <td> best color: </td>
            <td>
               <?=$form->select($colors, ['name' => 'color'])?>
            </td>
        </tr>

        <tr>
            <td colspan="2" align ="center">
                <?= $form->input('submit', ['name' => 'set', 'value' => 'Set Color'])?>
            </td>
        </tr>
</table>
</form>