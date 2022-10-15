<?php

namespace App\Controllers;

use App\Models\SettingModel;

class Setting extends BaseController
{
    public $setting_model;

    public function __construct()
    {
        $this->setting_model = new SettingModel();
    }

    public function image()
    {
        if (!user_can('view-setting')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "Image";
        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('Image', '/setting/image');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['setting'] = $this->setting_model->first();
        $data['validation'] = \Config\Services::validation();

        return view('dashboard/setting/image/image', $data);
    }

    public function social_media()
    {
        if (!user_can('view-setting')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "Social Media";
        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('Social Media', '/setting/social_media');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['setting'] = $this->setting_model->first();
        $data['validation'] = \Config\Services::validation();

        return view('dashboard/setting/social_media/social_media', $data);
    }

    public function contact()
    {
        if (!user_can('view-setting')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "Contact";
        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('Contact', '/setting/contact');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['setting'] = $this->setting_model->first();
        $data['validation'] = \Config\Services::validation();

        return view('dashboard/setting/contact/contact', $data);
    }

    public function update($id)
    {
        if (!user_can('edit-setting')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        //load helper form and URL
        helper(['form', 'url']);

        if (check_token('token_image', $this->request->getVar('token'))) {

            $validation = [
                'background' => [
                    'rules' => 'max_size[background,2024]|is_image[background]|mime_in[background,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'Background size Maximum 2 MB',
                        'is_image' => 'Background file type must be JPG, JPEG, PNG',
                        'mime_in' => 'Background file type must be JPG, JPEG, PNG',
                    ],
                ],
                'banner1' => [
                    'rules' => 'max_size[banner1,2024]|is_image[banner1]|mime_in[banner1,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'Banner 1 size Maximum 2 MB',
                        'is_image' => 'Banner 1 file type must be JPG, JPEG, PNG',
                        'mime_in' => 'Banner 1 file type must be JPG, JPEG, PNG',
                    ],
                ],
                'title1' => [
                    'rules' => 'required|min_length[1]|max_length[300]',
                    'errors' => [
                        'required' => 'Title field is required',
                        'min_length' => 'Title Minimum 1 Character',
                        'max_length' => 'Title Maximum 300 Character',
                    ]
                ],
                'description1' => [
                    'rules' => 'required|min_length[1]|max_length[200]',
                    'errors' => [
                        'required' => 'Description field is required',
                        'min_length' => 'Description Minimum 1 Character',
                        'max_length' => 'Description Maximum 200 Character',
                    ]
                ],
                'url1' => [
                    'rules' => 'required|valid_url|min_length[1]|max_length[300]',
                    'errors' => [
                        'required' => 'Url field is required',
                        'valid_url' => 'Url is not valid',
                        'min_length' => 'Url Minimum 1 Character',
                        'max_length' => 'Url Maximum 300 Character',
                    ]
                ],
                'url_tag1' => [
                    'rules' => 'required|min_length[1]|max_length[50]',
                    'errors' => [
                        'required' => 'Url Tag field is required',
                        'min_length' => 'Url Tag Minimum 1 Character',
                        'max_length' => 'Url Tag Maximum 50 Character',
                    ]
                ],
                'banner2' => [
                    'rules' => 'max_size[banner2,2024]|is_image[banner2]|mime_in[banner2,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'Banner 2 size Maximum 2 MB',
                        'is_image' => 'Banner 2 file type must be JPG, JPEG, PNG',
                        'mime_in' => 'Banner 2 file type must be JPG, JPEG, PNG',
                    ],
                ],
                'title2' => [
                    'rules' => 'required|min_length[1]|max_length[300]',
                    'errors' => [
                        'required' => 'Title field is required',
                        'min_length' => 'Title Minimum 1 Character',
                        'max_length' => 'Title Maximum 300 Character',
                    ]
                ],
                'description2' => [
                    'rules' => 'required|min_length[1]|max_length[200]',
                    'errors' => [
                        'required' => 'Description field is required',
                        'min_length' => 'Description Minimum 1 Character',
                        'max_length' => 'Description Maximum 200 Character',
                    ]
                ],
                'url2' => [
                    'rules' => 'required|valid_url|min_length[1]|max_length[300]',
                    'errors' => [
                        'required' => 'Url field is required',
                        'valid_url' => 'Url is not valid',
                        'min_length' => 'Url Minimum 1 Character',
                        'max_length' => 'Url Maximum 300 Character',
                    ]
                ],
                'url_tag2' => [
                    'rules' => 'required|min_length[1]|max_length[50]',
                    'errors' => [
                        'required' => 'Url Tag field is required',
                        'min_length' => 'Url Tag Minimum 1 Character',
                        'max_length' => 'Url Tag Maximum 50 Character',
                    ]
                ],
                'banner3' => [
                    'rules' => 'max_size[banner3,2024]|is_image[banner3]|mime_in[banner3,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'Banner 3 size Maximum 2 MB',
                        'is_image' => 'Banner 3 file type must be JPG, JPEG, PNG',
                        'mime_in' => 'Banner 3 file type must be JPG, JPEG, PNG',
                    ],
                ],
                'title3' => [
                    'rules' => 'required|min_length[1]|max_length[300]',
                    'errors' => [
                        'required' => 'Title field is required',
                        'min_length' => 'Title Minimum 1 Character',
                        'max_length' => 'Title Maximum 300 Character',
                    ]
                ],
                'description3' => [
                    'rules' => 'required|min_length[1]|max_length[200]',
                    'errors' => [
                        'required' => 'Description field is required',
                        'min_length' => 'Description Minimum 1 Character',
                        'max_length' => 'Description Maximum 200 Character',
                    ]
                ],
                'url3' => [
                    'rules' => 'required|valid_url|min_length[1]|max_length[300]',
                    'errors' => [
                        'required' => 'Url field is required',
                        'valid_url' => 'Url is not valid',
                        'min_length' => 'Url Minimum 1 Character',
                        'max_length' => 'Url Maximum 300 Character',
                    ]
                ],
                'url_tag3' => [
                    'rules' => 'required|min_length[1]|max_length[50]',
                    'errors' => [
                        'required' => 'Url Tag field is required',
                        'min_length' => 'Url Tag Minimum 1 Character',
                        'max_length' => 'Url Tag Maximum 50 Character',
                    ]
                ],
                 'logo' => [
                    'rules' => 'max_size[logo,2024]|is_image[logo]|mime_in[banner3,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'Logo size Maximum 2 MB',
                        'is_image' => 'Logo file type must be JPG, JPEG, PNG',
                        'mime_in' => 'Logo file type must be JPG, JPEG, PNG',
                    ],
                ],
            ];

            if (!$this->validate($validation)) {
                return redirect()->back()->withInput();
            } else {

                $imgOldBg = $this->request->getVar('imageOldBg');
                $imgPathBg = $this->request->getFile('background');

                if ($imgPathBg->getError() == 4) {
                    $imgNameBg = $imgOldBg;
                } else {
                    $imgNameBg = $imgPathBg->getRandomName();
                    unlink('img/setting/' . $imgOldBg);
                    $image = \Config\Services::image()
                        ->withFile($imgPathBg)
                        ->fit(1600, 300, 'center')
                        ->save(FCPATH . '/img/setting/' . $imgNameBg);
                }

                $imgOldBn1 = $this->request->getVar('imageOldBn1');
                $imgPathBn1 = $this->request->getFile('banner1');

                if ($imgPathBn1->getError() == 4) {
                    $imgNameBn1 = $imgOldBn1;
                } else {
                    $imgNameBn1 = $imgPathBn1->getRandomName();
                    unlink('img/setting/' . $imgOldBn1);
                    $image = \Config\Services::image()
                        ->withFile($imgPathBn1)
                        ->fit(1600, 800, 'center')
                        ->save(FCPATH . '/img/setting/' . $imgNameBn1);
                }

                $imgOldBn2 = $this->request->getVar('imageOldBn2');
                $imgPathBn2 = $this->request->getFile('banner2');

                if ($imgPathBn2->getError() == 4) {
                    $imgNameBn2 = $imgOldBn2;
                } else {
                    $imgNameBn2 = $imgPathBn2->getRandomName();
                    unlink('img/setting/' . $imgOldBn2);
                    $image = \Config\Services::image()
                        ->withFile($imgPathBn2)
                        ->fit(1600, 800, 'center')
                        ->save(FCPATH . '/img/setting/' . $imgNameBn2);
                }

                $imgOldBn3 = $this->request->getVar('imageOldBn3');
                $imgPathBn3 = $this->request->getFile('banner3');

                if ($imgPathBn3->getError() == 4) {
                    $imgNameBn3 = $imgOldBn3;
                } else {
                    $imgNameBn3 = $imgPathBn3->getRandomName();
                    unlink('img/setting/' . $imgOldBn3);
                    $image = \Config\Services::image()
                        ->withFile($imgPathBn3)
                        ->fit(1600, 800, 'center')
                        ->save(FCPATH . '/img/setting/' . $imgNameBn3);
                }

                $imgOldLogo = $this->request->getVar('imageOldLogo');
                $imgPathLogo = $this->request->getFile('logo');

                if ($imgPathLogo->getError() == 4) {
                    $imgNameLogo = $imgOldLogo;
                } else {
                    $imgNameLogo = $imgPathLogo->getRandomName();
                    unlink('img/setting/' . $imgOldLogo);
                    $image = \Config\Services::image()
                        ->withFile($imgPathLogo)
                        ->fit(520, 60, 'center')
                        ->save(FCPATH . '/img/setting/' . $imgNameLogo);
                }

                $title1 = $this->request->getVar('title1');
                $description1 = $this->request->getVar('description1');
                $url1 = $this->request->getVar('url1');
                $url_tag1 = $this->request->getVar('url_tag1');

                $title2 = $this->request->getVar('title2');
                $description2 = $this->request->getVar('description2');
                $url2 = $this->request->getVar('url2');
                $url_tag2 = $this->request->getVar('url_tag2');

                $title3 = $this->request->getVar('title3');
                $description3 = $this->request->getVar('description3');
                $url3 = $this->request->getVar('url3');
                $url_tag3 = $this->request->getVar('url_tag3');

                $data = [
                    'background' => $imgNameBg,
                    'banner1' => $imgNameBn1,
                    'banner2' => $imgNameBn2,
                    'banner3' => $imgNameBn3,
                    'title1' => $title1,
                    'description1' => $description1,
                    'url1' => $url1,
                    'url_tag1' => $url_tag1,
                    'title2' => $title2,
                    'description2' => $description2,
                    'url2' => $url2,
                    'url_tag2' => $url_tag2,
                    'title3' => $title3,
                    'description3' => $description3,
                    'url3' => $url3,
                    'url_tag3' => $url_tag3,
                    'logo' => $imgNameLogo,
                ];

                $edit = $this->setting_model->update($id, $data);
                if ($edit) {
                    session()->setFlashdata('message', 'Edit data success');
                    return redirect()->to(base_url('/setting/image'));
                }
            }
        } else {
            return redirect()->to(base_url('/dashboard/err404'));
        }
    }

    public function update_social_media($id)
    {
        if (!user_can('edit-setting')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        //load helper form and URL
        helper(['form', 'url']);

        if (check_token('token_social_media', $this->request->getVar('token'))) {

            $validation = [
                'facebook' => [
                    'rules' => 'required|min_length[8]|max_length[100]',
                    'errors' => [
                        'required' => 'Facebook field is required',
                        'min_length' => 'Facebook Minimum 8 Character',
                        'max_length' => 'Facebook Maximum 100 Character',
                    ]
                ],
                'twitter' => [
                    'rules' => 'required|min_length[8]|max_length[100]',
                    'errors' => [
                        'required' => 'Twitter field is required',
                        'min_length' => 'Twitter Minimum 8 Character',
                        'max_length' => 'Twitter Maximum 100 Character',
                    ]
                ],
                'instagram' => [
                    'rules' => 'required|min_length[8]|max_length[100]',
                    'errors' => [
                        'required' => 'Instagram field is required',
                        'min_length' => 'Instagram Minimum 8 Character',
                        'max_length' => 'Instagram Maximum 100 Character',
                    ]
                ],
                'youtube' => [
                    'rules' => 'required|min_length[8]|max_length[100]',
                    'errors' => [
                        'required' => 'Youtube field is required',
                        'min_length' => 'Youtube Minimum 8 Character',
                        'max_length' => 'Youtube Maximum 100 Character',
                    ]
                ],
            ];

            if (!$this->validate($validation)) {
                return redirect()->back()->withInput();
            } else {

                $facebook = $this->request->getVar('facebook');
                $instagram = $this->request->getVar('instagram');
                $twitter = $this->request->getVar('twitter');
                $youtube = $this->request->getVar('youtube');

                $data = [
                    'facebook' => $facebook,
                    'instagram' => $instagram,
                    'twitter' => $twitter,
                    'youtube' => $youtube,
                ];

                $edit = $this->setting_model->update($id, $data);
                if ($edit) {
                    session()->setFlashdata('message', 'Edit data success');
                    return redirect()->to(base_url('/setting/social_media'));
                }
            }
        } else {
            return redirect()->to(base_url('/dashboard/err404'));
        }
    }

    public function update_contact($id)
    {
        if (!user_can('edit-setting')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        //load helper form and URL
        helper(['form', 'url']);

        if (check_token('token_contact', $this->request->getVar('token'))) {

            $validation = [
                'address' => [
                    'rules' => 'required|min_length[1]|max_length[50]',
                    'errors' => [
                        'required' => 'Address field is required',
                        'min_length' => 'Address Minimum 1 Character',
                        'max_length' => 'Address Maximum 50 Character',
                    ]
                ],
                'contact' => [
                    'rules' => 'required|min_length[1]|max_length[50]',
                    'errors' => [
                        'required' => 'Contact field is required',
                        'min_length' => 'Contact Minimum 1 Character',
                        'max_length' => 'Contact Maximum 50 Character',
                    ]
                ],
                'email' => [
                    'rules' => 'required|valid_email|min_length[8]|max_length[50]',
                    'errors' => [
                        'required' => 'Email field is required',
                        "valid_email" => "Email address is not in format",
                        'min_length' => 'Email Minimum 8 Character',
                        'max_length' => 'Email Maximum 50 Character',
                    ]
                ],
                'work_day' => [
                    'rules' => 'required|min_length[8]|max_length[50]',
                    'errors' => [
                        'required' => 'Work Day field is required',
                        'min_length' => 'Work Day Minimum 8 Character',
                        'max_length' => 'Work Day Maximum 50 Character',
                    ]
                ],
                'hour' => [
                    'rules' => 'required|min_length[8]|max_length[50]',
                    'errors' => [
                        'required' => 'Hour field is required',
                        'min_length' => 'Hour Minimum 8 Character',
                        'max_length' => 'Hour Maximum 50 Character',
                    ]
                ],
                'quotes' => [
                    'rules' => 'required|min_length[8]|max_length[50]',
                    'errors' => [
                        'required' => 'Quotes field is required',
                        'min_length' => 'Quotes Minimum 8 Character',
                        'max_length' => 'Quotes Maximum 50 Character',
                    ]
                ],
                'motto' => [
                    'rules' => 'required|min_length[8]|max_length[50]',
                    'errors' => [
                        'required' => 'Motto field is required',
                        'min_length' => 'Motto Minimum 8 Character',
                        'max_length' => 'Motto Maximum 50 Character',
                    ]
                ],
                'author' => [
                    'rules' => 'required|min_length[1]|max_length[50]',
                    'errors' => [
                        'required' => 'Author field is required',
                        'min_length' => 'Author Minimum 1 Character',
                        'max_length' => 'Author Maximum 50 Character',
                    ]
                ],
            ];

            if (!$this->validate($validation)) {
                return redirect()->back()->withInput();
            } else {

                $address = $this->request->getVar('address');
                $contact = $this->request->getVar('contact');
                $email = $this->request->getVar('email');
                $work_day = $this->request->getVar('work_day');
                $hour = $this->request->getVar('hour');
                $quotes = $this->request->getVar('quotes');
                $motto = $this->request->getVar('motto');
                $author = $this->request->getVar('author');

                $data = [
                    'address' => $address,
                    'contact' => $contact,
                    'email' => $email,
                    'work_day' => $work_day,
                    'hour' => $hour,
                    'quotes' => $quotes,
                    'motto' => $motto,
                    'author' => $author,
                ];

                $edit = $this->setting_model->update($id, $data);
                if ($edit) {
                    session()->setFlashdata('message', 'Edit data success');
                    return redirect()->to(base_url('/setting/contact'));
                }
            }
        } else {
            return redirect()->to(base_url('/dashboard/err404'));
        }
    }
}
