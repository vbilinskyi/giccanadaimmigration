<div class="modal fade" id="assessment-modal">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ASSESSMENT FORM</h5>
            </div>
            <div class="modal-body">
                <div id="ass-step-init">
                    <div>
                        <span class="ass-photo"></span>
                        <p>
                            <span>Добрый день!</span>
                            <span>После заполнения формы, оплаты услуг и открытия иммиграционного дела
                                    Вам будет присвоен личный номер файла и отправлен на указанный Вами e-mail.</span>
                            <span>C его помощью Вы получите доступ в личный кабинет, где сможет следить за обновлением статуса своего дела.</span>
                        </p>
                    </div>
                    <button class="orange-btn" id="ass-init-btn">Заполнить форму</button>
                </div>
                <div class="progress-container">
                    <p class="progress-cation">Шаг <span class="progress-current-step"></span> из <span class="progress-steps-count"></span></p>
                    <div class="progressbar">
                        <div></div>
                    </div>
                </div>
                <form id="assessment-form">
                    <h5>Личные данные</h5>
                    <fieldset class="assessment-step -step1"></fieldset>
                    <h5>Семейное положение</h5>
                    <fieldset class="assessment-step -step2"></fieldset>
                    <h5>TODO</h5>
                    <fieldset class="assessment-step -step3"></fieldset>
                    <h5>Личные данные</h5>
                    <fieldset class="assessment-step -step4"></fieldset>
                </form>
            </div>
        </div>
    </div>
</div>