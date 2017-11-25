<!-------- READING QUERIES -------->
    <div class="line">
      <div class="buttonMethods">
        <label class="buttonLabel" for="buttonMethod1">getTablesList()</label><br>
        <input id="buttonMethod1" class="button" type="button" name="query" value="Clic !">
      </div>

      <div class="resultMethods">
        <p class="textResult"><?php $dbase->getTablesList(); ?></p>
      </div>
    </div>

    <div class="line">
      <div class="buttonMethods">
        <label class="buttonLabel" for="buttonMethod2">articlesDescendDate()</label><br>
        <input id="buttonMethod2" class="button" type="button" name="query" value="Clic !">
      </div>

      <div class="resultMethods">
        <p class="textResult"><?php $dbase->articlesDescendDate(); ?></p>
      </div>
    </div>

    <div class="line">
      <div class="buttonMethods">
        <label class="buttonLabel" for="buttonMethod2b">getArticleByCategoryId(1)</label><br>
        <input id="buttonMethod2b" class="button" type="button" name="query" value="Clic !">
      </div>

      <div class="resultMethods">
        <p class="textResult"><?php $dbase->getArticleByCategoryId(1); ?></p>
      </div>
    </div>

    <div class="line">
      <div class="buttonMethods">
        <label class="buttonLabel" for="buttonMethod3">getArticleById(2)</label><br>
        <input id="buttonMethod3" class="button" type="button" name="query" value="Clic !">
      </div>

      <div class="resultMethods">
        <p class="textResult"><?php $dbase->getArticleById(2); ?></p>
      </div>
    </div>

    <div class="line">
      <div class="buttonMethods">
        <label class="buttonLabel" for="buttonMethod4">auteursAscdName()</label><br>
        <input id="buttonMethod4" class="button" type="button" name="query" value="Clic !">
      </div>

      <div class="resultMethods">
        <p class="textResult"><?php $dbase->auteursAscdName(); ?></p>
      </div>
    </div>

    <div class="line">
      <div class="buttonMethods">
        <label class="buttonLabel" for="buttonMethod5">getAuteurById(2)</label><br>
        <input id="buttonMethod5" class="button" type="button" name="query" value="Clic !">
      </div>

      <div class="resultMethods">
        <p class="textResult"><?php $dbase->getAuteurById(2); ?></p>
      </div>
    </div>

    <div class="line">
      <div class="buttonMethods">
        <label class="buttonLabel" for="buttonMethod6">getCategoriesByIdOrder()</label><br>
        <input id="buttonMethod6" class="button" type="button" name="query" value="Clic !">
      </div>

      <div class="resultMethods">
        <p class="textResult"><?php $dbase->getCategoriesByIdOrder(); ?></p>
      </div>
    </div>
