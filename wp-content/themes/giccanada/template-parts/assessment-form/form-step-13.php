<p>Укажите свой опыт работы, в хронологическом порядке начиная с последнего места работы.</p>
<div class="multiplication-container">
    <section>
        <label for="company-name-0">Наименование компании / нанимателя</label>
        <input type="text" name="company-name-0" id="company-name-0" class="to-change-id">
    </section>
    <section>
        <label for="company-country-0" class="to-change-id">Город, страна</label>
        <input type="text" name="company-country-0" id="company-country-0" class="to-change-id">
    </section>
    <section>
        <label for="company-position-0">Должность</label>
        <input type="text" name="company-position-0" id="company-position-0" class="to-change-id">
    </section>
    <section>
        <section class="period-date clearfix">
            <div class="from-date clearfix">
                <label>Период работы, c</label>
                <select title="" class="month to-change-id" name="ass-company-from-m-0" id="ass-company-from-m-0" required>
                    <option value="" disabled selected>Month</option>
	                <?php $months = array('January', 'February', 'March','April',
		                'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');?>
	                <?php for($i = 1; $i <= count($months); ++$i):?>
                        <option value="<?= $i;?>"><?= $months[$i - 1];?></option>
	                <?php endfor;?>
                </select>

                <select title="" class="year to-change-id" name="ass-company-from-y-0" id="ass-company-from-y-0" required>
                    <option value="" disabled selected>Year</option>
	                <?php for($i = date('Y'); $i >= 1930; --$i):?>
                        <option value="<?= $i;?>"><?= $i;?></option>
	                <?php endfor;?>
                </select>
            </div>
            <div class="to-date clearfix">
                <label >по</label>
                <select title="" id="ass-company-to-m-0" name="ass-company-to-m-0" class="month to-change-id" required>
                    <option value="" disabled selected>Month</option>
	                <?php $months = array('January', 'February', 'March','April',
		                'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');?>
	                <?php for($i = 1; $i <= count($months); ++$i):?>
                        <option value="<?= $i;?>"><?= $months[$i - 1];?></option>
	                <?php endfor;?>
                </select>

                <select title="" id="ass-company-to-y-0" name="ass-company-to-y-0" class="year to-change-id" required>
                    <option value="" disabled selected>Year</option>
	                <?php for($i = date('Y'); $i >= 1930; --$i):?>
                        <option value="<?= $i;?>"><?= $i;?></option>
	                <?php endfor;?>
                </select>
            </div>
        </section>
    </section>
    <section>
        <label for="company-requirement-0">Должностные обязанности</label>
        <textarea name="company-requirement-0" id="company-requirement-0" class="to-change-id" rows="4"  cols="50"></textarea>
    </section>
</div>
<section>
    <button class="ass-add-button" onclick="app.func.copyMultiplicationContainer(event);"><span>Добавить место работы</span></button>
</section>