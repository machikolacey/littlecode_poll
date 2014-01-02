<h2>The result</h2>
<h4>Q1.Are You Going to Vote?</h4>
<table width="75%" border="1">
  <tr> 
    <th>Constituency</th>
    <th>Yes</th>
    <th>No</th>
    <th>Not decided</th>
  </tr>
  <tr> 
    <?php 
   foreach($all_commitment as $row){
  ?>
    <td width="33%"> 
      <?php  echo $row['const_name']; ?>
    </td>
    <td width="33%"> 
      <?php  echo $row['vote']; ?>
    </td>
    <td width="34%"> 
      <?php  echo $row['abandon']; ?>
    </td>
    <td width="34%"> 
      <?php  echo $row['undecided']; ?>
    </td>
  </tr>
  <?php } ?>
</table>
<h4>Q2.Who are You Voting For?</h4>
<table width="75%" border="1">
  <tr> 
    <th>Constituency</th>
    <th>Conservative</th>
    <th>Labour</th>
    <th>Liberal Democrats</th>
    <th>Green Party </th>
  </tr>
  <tr> 
    <?php 
   foreach($all_poll as $row){
  ?>
    <td width="33%"> 
      <?php  echo $row['const_name']; ?>
    </td>
    <td width="33%">
      <?php  echo $row['party1']; ?>
    </td>
    <td width="34%">
      <?php  echo $row['party2']; ?>
    </td>
    <td width="34%">
      <?php  echo $row['party3']; ?>
    </td>
    <td width="34%">
      <?php  echo $row['party4']; ?>
    </td>
  </tr>
  <?php } ?>
</table>
