<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>BMR</title>
    <script src="js/bmr.js"></script>
  </head>
  <body>
    <h3>Perhitungan Kalori</h3>
    <form id="info">
      <fieldset style="width:300px">
        <legend>Informasi</legend>
        <table>
          <tr>
            <td>Jenis Kelamin:</td>
            <td>
            <input type="radio" name="gen" id="gen" value="female" checked="checked" />Wanita 
            <input type="radio" name="gen" id="gen" value="male" />Pria</td>
          </tr>
          <tr>
            <td>Tinggi Badan:</td>
            <td>
            <input type="text" name="h" id="h" size="20" />(cm)</td>
          </tr>
          <tr>
            <td>Berat Badan:</td>
            <td>
            <input type="text" name="w" id="w" size="20" />(kg)
            <br /></td>
          </tr>
          <tr>
            <td>Usia:</td>
            <td>
              <input type="text" name="age" id="age" size="20" />
              <br />
            </td>
          </tr>
          <tr>
            <td>Aktivitas:</td>
            <td>
              <select name="active" id="active">
                <option value="0">Tidak Aktif</option>
                <option value="1">Sedikit Aktif</option>
                <option value="2">Cukup AKtif</option>
                <option value="3">Aktif</option>
                <option value="4">Sangat Aktif</option>
              </select>
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
              <input type="button" onclick="calc()" value="Hitung Kalori" />
            </td>
          </tr>
        </table>
      </fieldset>
    </form>
    <form>
      <fieldset style="width:300px">
        <legend>Hasil</legend>
        <table>
          <tr>
            <td>Kalori Yang Dibutuhkan</td>
            <td>
              <input type="text" id="result" name="result" readonly />
            </td>
          </tr>
        </table>
      </fieldset>
    </form>
    <!--  Ctrl + Alt + F to beautifier js code -->
    <br />
    <footer>Copyright KELOMPOK 6.</footer>
  </body>
</html>