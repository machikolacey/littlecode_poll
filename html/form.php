<form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <table cellpadding="0" cellspacing="0" class="page1table">
    <tr> 
      <td width="109">Are you going to vote?</td>
      <td><input type="radio" name="commitment"
<?php if (isset($_POST['commitment']) && $_POST['commitment']=="yes") echo "checked";?>
value="yes">
        Yes<br> <input type="radio" name="commitment"
<?php if (isset($_POST['commitment']) && $_POST['commitment']=="no") echo "checked";?>
value="no">
        No<br> <input type="radio" name="commitment"
<?php if (isset($_POST['commitment']) && $_POST['commitment']=="undecided") echo "checked";?>
value="undecided">
        Not decided</td>
    </tr>
    <tr> 
      <td nowrap>Who are you going to vote for?</td>
      <td><input type="radio" name="vote"
<?php if (isset($party) && $party=="1") echo "checked";?>
value="1">
        Conservative<br> <input type="radio" name="vote"
<?php if (isset($party) && $party=="2") echo "checked";?>
value="2">
        Labour<br> <input type="radio" name="vote"
<?php if (isset($party) && $party=="3") echo "checked";?>
value="3">
        Liberal Democrats <br> <input type="radio" name="vote"
<?php if (isset($party) && $party=="4") echo "checked";?>
value="4">
        Green Party <br> </td>
    </tr>
    <tr> 
      <td width="109">Your constituency</td>
      <td width="131"> <label for="tags"></label> <input name="const_name" id="const_name" value="Please Type"> 
        <input type="hidden" name="const_i" id="const_i" value="0"> <div class="ui-menu" id="searchSuggest"> 
        </div></td>
    </tr>
    <tr align="right"> 
      <td colspan="2"><input type="submit" name="submit" value="Submit" class="pure-button pure-button-active"></td>
    </tr>
  </table>
            </form>