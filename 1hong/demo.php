<?php do { ?>
  <script type="text/javascript">
$("a.<?php echo $row_words['lower(Kruid)']; ?>").qtip({
   content: { text: '<span class="oms">Smaak :</span> <?php echo $row_words['Smaak']; ?>  <span class="oms">Lekkerin :</span> <?php echo ($row_words['Lekkerin']); ?>  <img src="../images/ingredienten/<?php echo $row_words['Foto']; ?>" width="64" height="64" />' },
   show: 'mouseover',
   hide: 'mouseout',
   style: {
      width: 300,
      padding: 5,
      background: '#FC6',
      color: 'black',
      textAlign: 'left',
      border: {
         width: 3,
         radius: 8,
         color: '#900'
      },
      tip: 'topLeft',
      name: 'dark' // Inherit the rest of the attributes from the preset dark style
   }
});
</script>
  <?php } while ($row_words = mysql_fetch_assoc($words)); ?>
  <?php do { ?>
  <script type="text/javascript">
$("a.<?php echo $row_terms['Term']; ?>").qtip({
   content: { text: '<span class="oms">Omschrijving :</span> <?php echo nl2br($row_terms['Omschrijving']); ?>'},
   show: 'mouseover',
   hide: 'mouseout',
   style: {
      width: 300,
      padding: 5,
      background: '#FC6',
      color: 'black',
      textAlign: 'left',
      border: {
         width: 3,
         radius: 8,
         color: '#900'
      },
      tip: 'topLeft',
      name: 'dark' 
   }
});
</script>
  <?php } while ($row_terms = mysql_fetch_assoc($terms)); ?>