<div class="formbold-main-wrapper" style="direction: rtl">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="formbold-form-wrapper">


        <form action="{{route('form_post')}}" method="POST">
            @csrf
            <div class="formbold-form-title">
                <h2 class="">سجل الان</h2>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <h2 class="">   {{ session()->get('message') }} </h2>
                    </div>
                @endif
            </div>

            <div class="formbold-mb-3">
                <div>
                    <label for="firstname" class="formbold-form-label">
                        الاسم كامل
                    </label>
                    <input
                        type="text"
                        name="full_name"
                        id="full_name"
                        class="formbold-form-input"
                    />
                </div>
            </div>

            <div class="formbold-mb-3">
                <div>
                    <label for="firstname" class="formbold-form-label">
                        رقم الهوية
                    </label>
                    <input
                        type="text"
                        name="user_identification"
                        id="user_identification"
                        class="formbold-form-input"
                    />
                </div>
            </div>

            <div class="formbold-mb-3">
                <div>
                    <label for="firstname" class="formbold-form-label">
                        اسم العيادة
                    </label>
                    <input
                        type="text"
                        name="clinic_name"
                        id="clinic_name"
                        class="formbold-form-input"
                    />
                </div>
            </div>

            <div class="formbold-mb-3">
            <div>
                <label for="phone" class="formbold-form-label"> رقم الجوال </label>
                <input
                    type="text"
                    name="phone_number"
                    id="phone_number"
                    class="formbold-form-input"
                />
            </div>
            </div>

            <div class="formbold-mb-3">
                <div>
                    <label for="phone" class="formbold-form-label"> تاريخ الميلاد </label>
                    <input
                        type="date"
                        name="birthday"
                        id="birthday"
                        class="formbold-form-input"
                    />
                </div>
            </div>

            <div class="formbold-mb-3">
                <label for="address" class="formbold-form-label">
                   عنوان النزوح أو السكن
                </label>
                <input
                    type="text"
                    name="new_address"
                    id="new_address"
                    class="formbold-form-input"
                />
            </div>

            <div class="formbold-mb-3">
                <label for="address" class="formbold-form-label">
                    أقرب عيادة وكالة
                </label>
                <input
                    type="text"
                    name="unrwa_clinic"
                    id="unrwa_clinic"
                    class="formbold-form-input"
                />
            </div>

            <button class="formbold-btn">التسجيل</button>
        </form>
    </div>
</div>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: 'Inter', sans-serif;
    }
    .formbold-mb-3 {
        margin-bottom: 15px;
    }
    .formbold-relative {
        position: relative;
    }
    .formbold-opacity-0 {
        opacity: 0;
    }
    .formbold-stroke-current {
        stroke: currentColor;
    }
    #supportCheckbox:checked ~ div span {
        opacity: 1;
    }

    .formbold-main-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 48px;
    }

    .formbold-form-wrapper {
        margin: 0 auto;
        max-width: 570px;
        width: 100%;
        background: white;
        padding: 40px;
    }

    .formbold-img {
        margin-bottom: 45px;
    }

    .formbold-form-title {
        margin-bottom: 30px;
    }
    .formbold-form-title h2 {
        font-weight: 600;
        font-size: 28px;
        line-height: 34px;
        color: #07074d;
    }
    .formbold-form-title p {
        font-size: 16px;
        line-height: 24px;
        color: #536387;
        margin-top: 12px;
    }

    .formbold-input-flex {
        display: flex;
        gap: 20px;
        margin-bottom: 15px;
    }
    .formbold-input-flex > div {
        width: 50%;
    }
    .formbold-form-input {
        text-align: center;
        width: 100%;
        padding: 13px 22px;
        border-radius: 5px;
        border: 1px solid #dde3ec;
        background: #ffffff;
        font-weight: 500;
        font-size: 16px;
        color: #536387;
        outline: none;
        resize: none;
    }
    .formbold-form-input:focus {
        border-color: #6a64f1;
        box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }
    .formbold-form-label {
        color: #536387;
        font-size: 14px;
        line-height: 24px;
        display: block;
        margin-bottom: 10px;
    }

    .formbold-checkbox-label {
        display: flex;
        cursor: pointer;
        user-select: none;
        font-size: 16px;
        line-height: 24px;
        color: #536387;
    }
    .formbold-checkbox-label a {
        margin-left: 5px;
        color: #6a64f1;
    }
    .formbold-input-checkbox {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border-width: 0;
    }
    .formbold-checkbox-inner {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 20px;
        height: 20px;
        margin-right: 16px;
        margin-top: 2px;
        border: 0.7px solid #dde3ec;
        border-radius: 3px;
    }

    .formbold-btn {
        font-size: 16px;
        border-radius: 5px;
        padding: 14px 25px;
        border: none;
        font-weight: 500;
        background-color: #6a64f1;
        color: white;
        cursor: pointer;
        margin-top: 25px;
    }
    .formbold-btn:hover {
        box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }
</style>
