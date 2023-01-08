<form action="result.php" method="POST">
  <label>お名前：<input type="text" name="name"></label>
  <br>

  <label>ご希望商品：
    <input type="radio" name="radio" value="Aセット">Aセット
    <input type="radio" name="radio" value="Bセット">Bセット
    <input type="radio" name="radio" value="Cセット">Cセット
  </label>
  <br />
  <label>注文数：<select name="select">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option></select>
  </label>
  <br>
  


  <input type="submit" name="submit" value="送信" />
</form>