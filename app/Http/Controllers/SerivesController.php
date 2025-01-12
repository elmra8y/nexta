<?php

namespace App\Http\Controllers;

class SerivesController extends Controller
{
    public function show($type)
    {
        $content = [];
        switch ($type) {
            case 'ux':
                $content = $this->uxContent();
                break;
            case 'web-development':
                $content = $this->webDevelopmentContent();
                break;
            case 'b2b-software':
                $content = $this->b2bSoftwareContent();
                break;
            case 'content-marketing':
                $content = $this->contentMarketingContent();
                break;
            case 'email-marketing':
                $content = $this->emailMarketingContent();
                break;
            case 'seo':
                $content = $this->seoContent();
                break;
            case 'social-media-ads':
                $content = $this->socialMediaAdsContent();
                break;
            case 'brand-identity':
                $content = $this->brandIdentityContent();
                break;
            case 'content-strategy':
                $content = $this->contentStrategyContent();
                break;
        }

        return view('our-services-details', ['content' => $content]);
    }

    public function uxContent(): array
    {
        return [
            'paragraph1' => __('services.uxContent.paragraph1'),
            'paragraph2' => __('services.uxContent.paragraph2'),
            'return [
    'paragraph1' => __('services . uxContent . paragraph1'),
    'paragraph2' => __('services . uxContent . paragraph2'),
    'paragraph3' => __('services . updatedParagraph3'),
    'paragraph4' => __('services . uxContent . paragraph4'),
    'ProjectBrainstorm' => __('services . uxContent . ProjectBrainstorm'),
    'ProjectDevelopment' => __('services . uxContent . ProjectDevelopment'),
    'ProjectDelivery' => __('services . uxContent . ProjectDelivery'),
    'CEOParagraph' => __('services . uxContent . CEOParagraph'),
    'additionalInfo' => __('services . uxContent . additionalInfo'),
    'references' => __('services . uxContent . references'),
];' => __('services.uxContent.paragraph3'),
            'paragraph4' => __('services.uxContent.paragraph4'),
            'ProjectBrainstorm' => __('services.uxContent.ProjectBrainstorm'),
            'ProjectDevelopment' => __('services.uxContent.ProjectDevelopment'),
            'ProjectDelivery' => __('services.uxContent.ProjectDelivery'),
            'CEOParagraph' => __('services.uxContent.CEOParagraph'),
        ];
    }

    public function webDevelopmentContent(): array
    {
        return [
            'paragraph1' => __('services.webDevelopmentContent.paragraph1'),
            'paragraph2' => __('services.webDevelopmentContent.paragraph2'),
            'paragraph3' => __('services.webDevelopmentContent.paragraph3'),
            'paragraph4' => __('services.webDevelopmentContent.paragraph4'),
            'ProjectBrainstorm' => __('services.uxContent.ProjectBrainstorm'),
            'ProjectDevelopment' => __('services.uxContent.ProjectDevelopment'),
            'ProjectDelivery' => __('services.uxContent.ProjectDelivery'),
            'CEOParagraph' => __('services.uxContent.CEOParagraph'),
        ];
    }

    public function b2bSoftwareContent(): array
    {
        return [
            'paragraph1' => __('services.b2bSoftwareContent.paragraph1'),
            'paragraph2' => __('services.b2bSoftwareContent.paragraph2'),
            'paragraph3' => __('services.b2bSoftwareContent.paragraph3'),
            'paragraph4' => __('services.b2bSoftwareContent.paragraph4'),
            'ProjectBrainstorm' => __('services.uxContent.ProjectBrainstorm'),
            'ProjectDevelopment' => __('services.uxContent.ProjectDevelopment'),
            'ProjectDelivery' => __('services.uxContent.ProjectDelivery'),
            'CEOParagraph' => __('services.uxContent.CEOParagraph'),
        ];
    }

    public function contentMarketingContent(): array
    {
        return [
            'paragraph1' => __('services.contentMarketingContent.paragraph1'),
            'paragraph2' => __('services.contentMarketingContent.paragraph2'),
            'paragraph3' => __('services.contentMarketingContent.paragraph3'),
            'paragraph4' => __('services.contentMarketingContent.paragraph4'),
            'ProjectBrainstorm' => __('services.uxContent.ProjectBrainstorm'),
            'ProjectDevelopment' => __('services.uxContent.ProjectDevelopment'),
            'ProjectDelivery' => __('services.uxContent.ProjectDelivery'),
            'CEOParagraph' => __('services.uxContent.CEOParagraph'),
        ];
    }

    public function emailMarketingContent(): array
    {
        return [
            'paragraph1' => __('services.emailMarketingContent.paragraph1'),
            'paragraph2' => __('services.emailMarketingContent.paragraph2'),
            'paragraph3' => __('services.emailMarketingContent.paragraph3'),
            'paragraph4' => __('services.emailMarketingContent.paragraph4'),
            'ProjectBrainstorm' => __('services.uxContent.ProjectBrainstorm'),
            'ProjectDevelopment' => __('services.uxContent.ProjectDevelopment'),
            'ProjectDelivery' => __('services.uxContent.ProjectDelivery'),
            'CEOParagraph' => __('services.uxContent.CEOParagraph'),
        ];
    }

    public function seoContent(): array
    {
        return [
            'paragraph1' => __('services.seoContent.paragraph1'),
            'paragraph2' => __('services.seoContent.paragraph2'),
            'paragraph3' => __('services.seoContent.paragraph3'),
            'paragraph4' => __('services.seoContent.paragraph4'),
            'ProjectBrainstorm' => __('services.uxContent.ProjectBrainstorm'),
            'ProjectDevelopment' => __('services.uxContent.ProjectDevelopment'),
            'ProjectDelivery' => __('services.uxContent.ProjectDelivery'),
            'CEOParagraph' => __('services.uxContent.CEOParagraph'),
        ];
    }

    public function socialMediaAdsContent(): array
    {
        return [
            'paragraph1' => __('services.socialMediaAdsContent.paragraph1'),
            'paragraph2' => __('services.socialMediaAdsContent.paragraph2'),
            'paragraph3' => __('services.socialMediaAdsContent.paragraph3'),
            'paragraph4' => __('services.socialMediaAdsContent.paragraph4'),
            'ProjectBrainstorm' => __('services.uxContent.ProjectBrainstorm'),
            'ProjectDevelopment' => __('services.uxContent.ProjectDevelopment'),
            'ProjectDelivery' => __('services.uxContent.ProjectDelivery'),
            'CEOParagraph' => __('services.uxContent.CEOParagraph'),
        ];
    }

    public function brandIdentityContent(): array
    {
        return [
            'paragraph1' => __('services.brandIdentityContent.paragraph1'),
            'paragraph2' => __('services.brandIdentityContent.paragraph2'),
            'paragraph3' => __('services.brandIdentityContent.paragraph3'),
            'paragraph4' => __('services.brandIdentityContent.paragraph4'),
            'ProjectBrainstorm' => __('services.uxContent.ProjectBrainstorm'),
            'ProjectDevelopment' => __('services.uxContent.ProjectDevelopment'),
            'ProjectDelivery' => __('services.uxContent.ProjectDelivery'),
            'CEOParagraph' => __('services.uxContent.CEOParagraph'),
        ];
    }

    public function contentStrategyContent(): array
    {
        return [
            'paragraph1' => __('services.contentStrategyContent.paragraph1'),
            'paragraph2' => __('services.contentStrategyContent.paragraph2'),
            'paragraph3' => __('services.contentStrategyContent.paragraph3'),
            'paragraph4' => __('services.contentStrategyContent.paragraph4'),
            'ProjectBrainstorm' => __('services.uxContent.ProjectBrainstorm'),
            'ProjectDevelopment' => __('services.uxContent.ProjectDevelopment'),
            'ProjectDelivery' => __('services.uxContent.ProjectDelivery'),
            'CEOParagraph' => __('services.uxContent.CEOParagraph'),
        ];
    }

}
