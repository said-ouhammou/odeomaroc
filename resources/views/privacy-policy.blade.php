<x-layout :meta="$meta">


    <x-privacy.hero/>
    
    <main class="bg-[#f9f5f2] min-h-[calc(100vh-20rem)]">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="prose prose-lg prose-invert max-w-none text-gray-800">
                <x-privacy.section title="1. Introduction">
                    <p>
                        Chez Odeo, nous accordons une importance capitale à la protection de vos données personnelles. 
                        En tant que leader marocain des solutions POS et PMS depuis 2015, nous nous engageons à assurer 
                        la confidentialité et la sécurité de vos informations dans le cadre de nos services de gestion 
                        pour l'hôtellerie et la restauration.
                    </p>
                </x-privacy.section>

                <x-privacy.section title="2. Collecte des données">
                    <p>Nous collectons uniquement les données nécessaires au bon fonctionnement de nos services :</p>
                    <x-privacy.list :items="[
                        'Informations d\'identification professionnelle (nom, prénom, email)',
                        'Données de l\'établissement (nom commercial, adresse, numéro de téléphone)',
                        'Informations techniques liées à l\'utilisation de nos solutions POS/PMS',
                        'Données de transaction (uniquement pour la gestion du service)'
                    ]"/>
                </x-privacy.section>

                <x-privacy.section title="3. Utilisation des données">
                    <p>Vos données sont utilisées exclusivement pour :</p>
                    <x-privacy.list :items="[
                        'Fournir et améliorer nos services de gestion hôtelière et restauration',
                        'Assurer le support technique et la maintenance',
                        'Personnaliser votre expérience utilisateur',
                        'Respecter nos obligations légales et réglementaires'
                    ]"/>
                </x-privacy.section>

                <x-privacy.section title="4. Protection des données">
                    <p>Odeo met en œuvre des mesures de sécurité robustes pour protéger vos données :</p>
                    <x-privacy.list :items="[
                        'Chiffrement des données sensibles',
                        'Accès restreint aux données personnelles',
                        'Surveillance continue de nos systèmes',
                        'Formation régulière de notre équipe aux bonnes pratiques de sécurité'
                    ]"/>
                </x-privacy.section>

                <x-privacy.section title="5. Vos droits">
                    <p>Conformément à la législation en vigueur, vous disposez des droits suivants :</p>
                    <x-privacy.list :items="[
                        'Accès à vos données personnelles',
                        'Rectification des informations inexactes',
                        'Suppression de vos données',
                        'Opposition au traitement de vos données',
                        'Portabilité de vos données'
                    ]"/>
                </x-privacy.section>

                <x-privacy.section title="6. Contact">
                    <p>
                        Pour toute question concernant notre politique de confidentialité ou pour exercer vos droits, 
                        contactez notre équipe dédiée à la protection des données :
                    </p>
                    <div class="mt-4">
                        <p>Email: <a href="mailto:contact@odeo.ma" target="_blank"><b>contact@odeo.ma</b></a></p>
                        <p>Téléphone: <a href="tel:+212661453373" target="_blank"><b>+212 661 45 33 73</b></a></p>
                        <p>Fix:<a href="tel:+212524422201" target="_blank"><b>+212 5 24 42 22 01</b></a></p>
                        <p> <a href="https://maps.app.goo.gl/Vz472TuSsxXS5Egx6" target="_blank">Adresse:  <b>Résidence le Noyer A, Rue Ibn Sina
                            1er étage N 15 - Guéliz
                            Marrakech - Maroc</b> </a>
                        </p>
                    </div>
                </x-privacy.section>
            </div>
        </div>
    </main>


</x-layout>