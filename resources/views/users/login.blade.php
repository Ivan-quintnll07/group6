<x-layout>
    <x-bar> </x-bar>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <div class="flex flex-col h-screen bg-cover bg-center"
        style="background-image: url('https://attachments.office.net/owa/brandon.menjivar2025%40poma.superate.org.sv/service.svc/s/GetAttachmentThumbnail?id=AAMkAGI0NGY5NTFhLWUxNmEtNDAxNC04MzhlLTJmMGMxNjA5MGYxMgBGAAAAAADU6s6nxZRwR79pSHTIMO6yBwB3tfNf%2BWldSozpxs2JWjefAAAAAAEMAAB3tfNf%2BWldSozpxs2JWjefAAF7WUdZAAABEgAQABGeiose63dErjnsYhA3ibg%3D&thumbnailType=2&token=eyJhbGciOiJSUzI1NiIsImtpZCI6IkU1RDJGMEY4REE5M0I2NzA5QzQzQTlFOEE2MTQzQzAzRDYyRjlBODAiLCJ0eXAiOiJKV1QiLCJ4NXQiOiI1ZEx3LU5xVHRuQ2NRNm5vcGhROEE5WXZtb0EifQ.eyJvcmlnaW4iOiJodHRwczovL291dGxvb2sub2ZmaWNlLmNvbSIsInVjIjoiNjUyNDQzYTM4ZjYyNDBjMGI4MGMwZjA5YTIxY2ZiNzkiLCJzaWduaW5fc3RhdGUiOiJrbXNpIiwidmVyIjoiRXhjaGFuZ2UuQ2FsbGJhY2suVjEiLCJhcHBjdHhzZW5kZXIiOiJPd2FEb3dubG9hZEBkOGUzYmQ0NC0wYmJhLTQyNmItOTUyZC1hZGE3YmIxNzM5M2MiLCJpc3NyaW5nIjoiV1ciLCJhcHBjdHgiOiJ7XCJtc2V4Y2hwcm90XCI6XCJvd2FcIixcInB1aWRcIjpcIjExNTM4MDExMjQyMDc3MjcyNTlcIixcInNjb3BlXCI6XCJPd2FEb3dubG9hZFwiLFwib2lkXCI6XCIzZjFhOGJlNS0zNjI0LTQ5M2MtOTc0MC01ZWUxOGQ5ZTBhZTdcIixcInByaW1hcnlzaWRcIjpcIlMtMS01LTIxLTE4OTI5NTY4MTYtMjg5NjM0MTMxMS0yNDc1OTM5NTc1LTEwMjI5MTc2XCJ9IiwibmJmIjoxNzI0Nzg3ODY3LCJleHAiOjE3MjQ3ODgxNjcsImlzcyI6IjAwMDAwMDAyLTAwMDAtMGZmMS1jZTAwLTAwMDAwMDAwMDAwMEBkOGUzYmQ0NC0wYmJhLTQyNmItOTUyZC1hZGE3YmIxNzM5M2MiLCJhdWQiOiIwMDAwMDAwMi0wMDAwLTBmZjEtY2UwMC0wMDAwMDAwMDAwMDAvYXR0YWNobWVudHMub2ZmaWNlLm5ldEBkOGUzYmQ0NC0wYmJhLTQyNmItOTUyZC1hZGE3YmIxNzM5M2MiLCJoYXBwIjoib3dhIn0.kP24k_LD14NqlK-FM5TCKE_hxbAPJ3Xye5jDMN39WnamB3Nn0IJjjGtgLj4BHrsnXqiU0SfmHKCDdJ_3-UDG6J4bNajnScSlCvH_k3JCrjIgA7wdhez7A_eirTrKZQP-zrNhQrffpRUxTxJlBnNwlO-1dOKXNU9AOrupZdhASaGuZ-sfqaVzITP10j2e24wZHKXM6psgCxuMnYYg-Q2rKDZHUk0jCyUtX1HD07Y_70diLoEOg6Dd0KPkSYrBFtIRXCgTl05jfqhPlQVWHeL1IEOqSu5cPDcoU02cvUumcvWeuKisMWkEOwbEd6O4jgCXRHMH5mM6p7RvcPEQCC0eew&X-OWA-CANARY=bdvoV5ac9cMAAAAAAAAAAHBnhdDQxtwYc5XsaDimWFE77CXZxX9KO8OxU4Y4xYqycLM1qechpPo.&owa=outlook.office.com&scriptVer=20240816003.13&clientId=F76BD17750BC4C4E86A34A5D9126DFCA&animation=true');">
        <div class="flex justify-center items-center h-screen">
            <div class="backdrop-blur-sm bg-white/30 rounded-md px-6 py-6">
                <h1 class="text-6xl block text-center font-poppins"><i class="fa-regular fa-user"></i> Iniciar Sesión</h1>
                <hr class="mt-3">
                <form action="/login" method="POST" class="bg-gray shadow-md space-y-4 rounded px-8 pt-6 pb-8 mb-4">
                    @csrf
                    <div class="flex items-center">
                    <span class="material-symbols-outlined">
                        person
                        </span>
                        <x-input name="name" type="text">Nombre completo</x-input>
                    </div>

                    <div class="flex items-center">
                    <span class="material-symbols-outlined">
                        key
                    </span>
                    <x-input name="password" type="password">Contraseña</x-input>

                    </div>

                    <label class="flex items-center mt-2">
                        <input type="checkbox" class="form-checkbox">
                        <span class="ml-2 text-gray-600">Recuérdame</span>
                    </label>
                    <x-primary-button>Crear cuenta</x-primary-button>
                </form>
                <div class="flex justify-center mt-4">
                    <a href="#" class="text-blue-500 hover:underline"><i
                            class="fa-regular fa-question-circle"></i> ¿Olvidaste tu contraseña?</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
