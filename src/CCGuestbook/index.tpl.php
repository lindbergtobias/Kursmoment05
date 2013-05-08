<h1>En gästbook</h1>
<form action="<?=$form_action?>" method='post'>
  <p>
    <label>Meddelande: <br/>
    <textarea name='newEntry'></textarea></label>
  </p>
  <p>
    <input type='submit' name='doAdd' value='Lägg till' />
    <input type='submit' name='doClear' value='Ta bort alla' />
    <input type='submit' name='doCreate' value='Skapa databastabell' />
  </p>
</form>

<h2>Alla meddelanden</h2>

<?php foreach($entries as $val):?>
<div style='background-color:#f6f6f6;border:1px solid #ccc;margin-bottom:1em;padding:1em;'>
  <p>At: <?=$val['created']?></p>
  <p><?=htmlent($val['entry'])?></p>
</div>
<?php endforeach;?>
