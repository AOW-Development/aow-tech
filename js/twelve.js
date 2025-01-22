(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [931],
  {
    3034: function (e, s, a) {
      Promise.resolve().then(a.t.bind(a, 231, 23)),
        Promise.resolve().then(a.bind(a, 2537)),
        Promise.resolve().then(a.bind(a, 1490)),
        Promise.resolve().then(a.bind(a, 3211)),
        Promise.resolve().then(a.bind(a, 290)),
        Promise.resolve().then(a.bind(a, 4377));
    },
    3211: function (e, s, a) {
      "use strict";
      a.d(s, {
        default: function () {
          return d;
        },
      });
      var l = a(7437),
        i = a(2265),
        r = a(5097),
        n = a(9721),
        t = a(7138);
      function d() {
        return (
          (0, i.useEffect)(() => {
            document.querySelectorAll("[data-background]").forEach((e) => {
              e.style.backgroundImage = "url(".concat(
                e.getAttribute("data-background"),
                ")"
              );
            });
          }, []),
          (0, l.jsxs)("section", {
            className: "banner-area bg-image paralax__animation",
            "data-background": "assets/images/banner/banner-bg.png",
            children: [
              (0, l.jsx)("div", {
                className: "banner__hero",
                children: (0, l.jsx)("img", {
                  className: "sway__animation",
                  src: "assets/images/banner/hero-image.png",
                  alt: "image",
                }),
              }),
              (0, l.jsx)("div", {
                className: "banner__hero-info",
                children: (0, l.jsx)("img", {
                  "data-depth": "0.03",
                  src: "assets/images/banner/banner-info.png",
                  alt: "image",
                }),
              }),
              (0, l.jsx)("div", {
                className: "container",
                children: (0, l.jsxs)("div", {
                  className: "banner__content",
                  children: [
                    (0, l.jsxs)("h1", {
                      className: "wow fadeInUp",
                      "data-wow-delay": "200ms",
                      "data-wow-duration": "1000ms",
                      children: [
                        "The Digital",
                        (0, l.jsx)("img", {
                          src: "assets/images/banner/banner-tittle-star.png",
                          alt: "image",
                        }),
                        (0, l.jsx)("br", {}),
                        "Marketing Agency For ",
                        (0, l.jsx)("span", { children: "Higher ROI" }),
                      ],
                    }),
                    (0, l.jsx)("p", {
                      className: "mt-50 wow fadeInUp",
                      "data-wow-delay": "400ms",
                      "data-wow-duration": "1000ms",
                      children:
                        "Choose success with our digital marketing agency, dedicated to delivering higher ROI that propels your business to new heights.",
                    }),
                    (0, l.jsxs)("div", {
                      className: "d-flex align-items-center gap-4 mt-40",
                      children: [
                        (0, l.jsxs)(t.default, {
                          href: "/pricing",
                          className: "btn-one wow fadeInDown",
                          "data-wow-delay": "200ms",
                          "data-wow-duration": "1000ms",
                          children: [
                            "Try it Now",
                            (0, l.jsx)(r.ewB, { className: "ml-10 fs-4" }),
                          ],
                        }),
                        (0, l.jsxs)(t.default, {
                          href: "/about-us",
                          className: "explore-btn wow fadeInDown",
                          "data-wow-delay": "400ms",
                          "data-wow-duration": "1000ms",
                          children: [
                            (0, l.jsx)("span", { children: "Explore More" }),
                            (0, l.jsx)(n.e$1, { className: "fs-5" }),
                          ],
                        }),
                      ],
                    }),
                  ],
                }),
              }),
            ],
          })
        );
      }
    },
    290: function (e, s, a) {
      "use strict";
      a.d(s, {
        default: function () {
          return t;
        },
      });
      var l = a(7437);
      a(2265);
      var i = a(3267),
        r = a(7805);
      let n = [
        {
          id: 1,
          src: "assets/images/brand/brand-image1.png",
          alt: "Brand Image 1",
        },
        {
          id: 2,
          src: "assets/images/brand/brand-image2.png",
          alt: "Brand Image 2",
        },
        {
          id: 3,
          src: "assets/images/brand/brand-image3.png",
          alt: "Brand Image 3",
        },
        {
          id: 4,
          src: "assets/images/brand/brand-image4.png",
          alt: "Brand Image 4",
        },
        {
          id: 5,
          src: "assets/images/brand/brand-image5.png",
          alt: "Brand Image 5",
        },
        {
          id: 6,
          src: "assets/images/brand/brand-image1.png",
          alt: "Brand Image 1",
        },
      ];
      function t() {
        return (0, l.jsx)("div", {
          className: "brand-area pt-70",
          children: (0, l.jsxs)("div", {
            className: "container",
            children: [
              (0, l.jsx)("h5", {
                className: "brand__title mb-40",
                children: "Used by World Leading Companies",
              }),
              (0, l.jsx)("div", {
                className: "swiper brand__slider",
                children: (0, l.jsx)(i.tq, {
                  modules: [r.pt],
                  loop: !0,
                  spaceBetween: 24,
                  speed: 3e3,
                  autoplay: { delay: 1 },
                  breakpoints: {
                    1200: { slidesPerView: 5 },
                    992: { slidesPerView: 4 },
                    575: { slidesPerView: 2 },
                    320: { slidesPerView: 2 },
                  },
                  className: "swiper-wrapper",
                  children: n.map((e) =>
                    (0, l.jsx)(
                      i.o5,
                      {
                        className: "swiper-slide",
                        children: (0, l.jsx)("img", { src: e.src, alt: e.alt }),
                      },
                      e.id
                    )
                  ),
                }),
              }),
            ],
          }),
        });
      }
    },
    4377: function (e, s, a) {
      "use strict";
      a.d(s, {
        default: function () {
          return c;
        },
      });
      var l = a(7437),
        i = a(7138),
        r = a(2265),
        n = a(1942),
        t = a(5097);
      let d = [
        {
          title: "Home",
          subMenu: [
            { title: "Digital Marketing", path: "/" },
            { title: "SEO Marketing", path: "/seo-marketing" },
          ],
        },
        { title: "About Us", href: "/about-us" },
        {
          title: "Services",
          subMenu: [
            { title: "Service", path: "/service" },
            { title: "Service Details", path: "/service-details" },
          ],
        },
        {
          title: "Pages",
          subMenu: [
            { title: "Team", path: "/team" },
            { title: "Team Details", path: "/team-details" },
            { title: "Pricing Plan", path: "/pricing" },
            { title: "Book a Demo", path: "/book-demo" },
            { title: "404 Error", path: "/error" },
          ],
        },
        {
          title: "Blog",
          subMenu: [
            { title: "Blog and Articles 01", path: "/blog" },
            { title: "Blog and Articles 02", path: "/blog-two" },
            { title: "Blog Details", path: "/blog-details" },
          ],
        },
        { title: "Contact", href: "/contact" },
      ];
      function c() {
        let [e, s] = (0, r.useState)([]);
        (0, r.useEffect)(() => {
          let e = document.querySelector(".header-area");
          window.addEventListener("scroll", function () {
            window.scrollY > 50
              ? e.classList.add("menu-fixed", "animated", "fadeInDown")
              : e.classList.remove("menu-fixed", "fadeInDown");
          });
        }, []);
        let a = () => {
            let e = document.getElementById("targetElement");
            e.classList.contains("sidebar__hide")
              ? e.classList.remove("sidebar__hide")
              : e.classList.add("sidebar__hide");
          },
          c = (a) => {
            let l = [...e],
              i = e.indexOf(a);
            i < 0 ? l.push(a) : l.splice(i, 1), s(l);
          };
        return (0, l.jsxs)(l.Fragment, {
          children: [
            (0, l.jsx)("header", {
              className: "header-area",
              children: (0, l.jsx)("div", {
                className: "container",
                children: (0, l.jsxs)("div", {
                  className: "header__main",
                  children: [
                    (0, l.jsx)(i.default, {
                      href: "/",
                      className: "logo",
                      children: (0, l.jsx)("img", {
                        src: "assets/images/logo/logo.svg",
                        alt: "logo",
                      }),
                    }),
                    (0, l.jsx)(i.default, {
                      href: "/",
                      className: "logo logo-light",
                      children: (0, l.jsx)("img", {
                        src: "assets/images/logo/logo.svg",
                        alt: "logo",
                      }),
                    }),
                    (0, l.jsx)("div", {
                      className: "main-menu d-none d-md-block",
                      children: (0, l.jsx)("nav", {
                        children: (0, l.jsxs)("ul", {
                          children: [
                            (0, l.jsxs)("li", {
                              children: [
                                (0, l.jsxs)(i.default, {
                                  href: "#0",
                                  children: ["Home ", (0, l.jsx)(n.iUH, {})],
                                }),
                                (0, l.jsxs)("ul", {
                                  className: "sub-menu",
                                  children: [
                                    (0, l.jsx)("li", {
                                      children: (0, l.jsx)(i.default, {
                                        href: "/",
                                        children: "Digital Marketing",
                                      }),
                                    }),
                                    (0, l.jsx)("li", {
                                      children: (0, l.jsx)(i.default, {
                                        href: "/seo-marketing",
                                        children: "Seo Marketing",
                                      }),
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, l.jsx)("li", {
                              children: (0, l.jsx)(i.default, {
                                href: "/about-us",
                                children: "About Us",
                              }),
                            }),
                            (0, l.jsxs)("li", {
                              children: [
                                (0, l.jsxs)(i.default, {
                                  href: "#0",
                                  children: [
                                    "Services ",
                                    (0, l.jsx)(n.iUH, {}),
                                  ],
                                }),
                                (0, l.jsxs)("ul", {
                                  className: "sub-menu",
                                  children: [
                                    (0, l.jsx)("li", {
                                      children: (0, l.jsx)(i.default, {
                                        href: "/service",
                                        children: "Service",
                                      }),
                                    }),
                                    (0, l.jsx)("li", {
                                      children: (0, l.jsx)(i.default, {
                                        href: "/service-details",
                                        children: "Service Details",
                                      }),
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, l.jsxs)("li", {
                              children: [
                                (0, l.jsxs)(i.default, {
                                  href: "#0",
                                  children: ["Pages ", (0, l.jsx)(n.iUH, {})],
                                }),
                                (0, l.jsxs)("ul", {
                                  className: "sub-menu",
                                  children: [
                                    (0, l.jsx)("li", {
                                      children: (0, l.jsx)(i.default, {
                                        href: "/team",
                                        children: "Team",
                                      }),
                                    }),
                                    (0, l.jsx)("li", {
                                      children: (0, l.jsx)(i.default, {
                                        href: "/team-details",
                                        children: "Team Details",
                                      }),
                                    }),
                                    (0, l.jsx)("li", {
                                      children: (0, l.jsx)(i.default, {
                                        href: "/pricing",
                                        children: "Pricing Plan",
                                      }),
                                    }),
                                    (0, l.jsx)("li", {
                                      children: (0, l.jsx)(i.default, {
                                        href: "/book-demo",
                                        children: "Book a Demo",
                                      }),
                                    }),
                                    (0, l.jsx)("li", {
                                      children: (0, l.jsx)(i.default, {
                                        href: "/error",
                                        children: "404 Error",
                                      }),
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, l.jsxs)("li", {
                              children: [
                                (0, l.jsxs)(i.default, {
                                  href: "#0",
                                  children: ["Blog ", (0, l.jsx)(n.iUH, {})],
                                }),
                                (0, l.jsxs)("ul", {
                                  className: "sub-menu",
                                  children: [
                                    (0, l.jsx)("li", {
                                      children: (0, l.jsx)(i.default, {
                                        href: "/blog",
                                        children: "Blog & Articles 01",
                                      }),
                                    }),
                                    (0, l.jsx)("li", {
                                      children: (0, l.jsx)(i.default, {
                                        href: "/blog-two",
                                        children: "Blog & Articles 02",
                                      }),
                                    }),
                                    (0, l.jsx)("li", {
                                      children: (0, l.jsx)(i.default, {
                                        href: "/blog-details",
                                        children: "Blog Details",
                                      }),
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, l.jsx)("li", {
                              children: (0, l.jsx)(i.default, {
                                href: "/contact",
                                children: "Contact",
                              }),
                            }),
                          ],
                        }),
                      }),
                    }),
                    (0, l.jsxs)(i.default, {
                      href: "/contact",
                      className: "btn-menu d-none d-lg-inline-block",
                      children: [
                        "Get in Touch",
                        (0, l.jsx)(t.ewB, { className: "ml-10 fs-4" }),
                      ],
                    }),
                    (0, l.jsx)("div", {
                      onClick: a,
                      className: "bars d-block d-lg-none border px-1 rounded",
                      children: (0, l.jsx)("i", {
                        className: "ri-menu-line fs-4",
                      }),
                    }),
                  ],
                }),
              }),
            }),
            (0, l.jsxs)("div", {
              id: "targetElement",
              className: "sidebar-area sidebar__hide",
              children: [
                (0, l.jsx)("div", { className: "sidebar__overlay" }),
                (0, l.jsx)(i.default, {
                  href: "/",
                  className: "logo mb-40",
                  children: (0, l.jsx)("img", {
                    src: "assets/images/logo/logo-light.svg",
                    alt: "logo",
                  }),
                }),
                (0, l.jsx)("div", {
                  className: "mobile-menu overflow-hidden",
                  children: (0, l.jsx)("ul", {
                    children: d.map((s, a) =>
                      s.subMenu
                        ? (0, l.jsxs)(
                            "li",
                            {
                              onClick: () => c(s.title),
                              children: [
                                (0, l.jsxs)("div", {
                                  className:
                                    "submenuHeading w-100 d-flex align-items-center justify-content-between border-top py-3",
                                  children: [
                                    (0, l.jsx)("span", {
                                      className: "text-white",
                                      children: s.title,
                                    }),
                                    (0, l.jsx)(n.iUH, {
                                      className: "text-white",
                                    }),
                                  ],
                                }),
                                (0, l.jsx)("ul", {
                                  className: "subItemsContainer ".concat(
                                    -1 !== e.indexOf(s.title)
                                      ? "d-block"
                                      : "d-none"
                                  ),
                                  children: s.subMenu.map((e, s) =>
                                    (0, l.jsx)(
                                      "li",
                                      {
                                        className: "py-2 ps-5",
                                        children: (0, l.jsx)(i.default, {
                                          href: e.path,
                                          className: "text-white w-100 d-block",
                                          children: e.title,
                                        }),
                                      },
                                      s
                                    )
                                  ),
                                }),
                              ],
                            },
                            a
                          )
                        : (0, l.jsx)(
                            "li",
                            {
                              className: "menuItem border-top py-3",
                              children: (0, l.jsx)(i.default, {
                                href: s.href,
                                className: "text-white w-100 d-block",
                                children: s.title,
                              }),
                            },
                            a
                          )
                    ),
                  }),
                }),
                (0, l.jsxs)("ul", {
                  className: "info pt-40",
                  children: [
                    (0, l.jsxs)("li", {
                      children: [
                        (0, l.jsx)("i", {
                          className: "fa-solid primary-color fa-location-dot",
                        }),
                        (0, l.jsx)(i.default, {
                          href: "#0",
                          children: "example@example.com",
                        }),
                      ],
                    }),
                    (0, l.jsxs)("li", {
                      className: "py-2",
                      children: [
                        (0, l.jsx)("i", {
                          className: "fa-solid primary-color fa-phone-volume",
                        }),
                        (0, l.jsx)(i.default, {
                          href: "tel:+912659302003",
                          children: "+91 2659 302 003",
                        }),
                      ],
                    }),
                    (0, l.jsxs)("li", {
                      children: [
                        (0, l.jsx)("i", {
                          className: "fa-solid primary-color fa-paper-plane",
                        }),
                        (0, l.jsx)(i.default, {
                          href: "#0",
                          children: "info.company@gmail.com",
                        }),
                      ],
                    }),
                  ],
                }),
                (0, l.jsxs)("div", {
                  className: "social-icon mt-20",
                  children: [
                    (0, l.jsx)(i.default, {
                      href: "#0",
                      children: (0, l.jsx)("i", { class: "ri-facebook-fill" }),
                    }),
                    (0, l.jsx)(i.default, {
                      href: "#0",
                      children: (0, l.jsx)("i", { class: "ri-instagram-line" }),
                    }),
                    (0, l.jsx)(i.default, {
                      href: "#0",
                      children: (0, l.jsx)("i", { class: "ri-linkedin-fill" }),
                    }),
                    (0, l.jsx)(i.default, {
                      href: "#0",
                      children: (0, l.jsx)("i", { class: "ri-youtube-fill" }),
                    }),
                  ],
                }),
                (0, l.jsx)("button", {
                  onClick: a,
                  id: "closeButton",
                  className: "text-white",
                  children: (0, l.jsx)("i", { class: "ri-close-fill" }),
                }),
              ],
            }),
          ],
        });
      }
    },
  },
  function (e) {
    e.O(0, [699, 779, 706, 305, 853, 987, 731, 971, 23, 744], function () {
      return e((e.s = 3034));
    }),
      (_N_E = e.O());
  },
]);
