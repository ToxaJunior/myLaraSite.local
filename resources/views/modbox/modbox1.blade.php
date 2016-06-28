<div class="modbox">
    <div class="form-feedback">
        <form action="{{url('/feedback')}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <h2>Написать нам:</h2>
            <div>
                <input class="main-color-text" type="text" name="name" size="40" placeholder="Ваше имя">
                <input class="main-color-text" type="email" name="email" size="40" required="required" placeholder="Ваша почта">
                <input class="main-color-text" type="tel" name="tel" size="40" placeholder="Ваш телефон">
                <textarea class="main-color-text" name="message" cols="43" rows="6" placeholder="Текст сообщения"></textarea>
            </div>
            <button type="submit" class="btn my-btn">Отправить сообщение</button>
        </form>
    </div>
</div>