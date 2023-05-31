"use strict";
(self.webpackChunkvehikl_website = self.webpackChunkvehikl_website || []).push([
    [650],
    {
        6203: function (e, t, a) {
            a.r(t),
                a.d(t, {
                    default: function () {
                        return g;
                    },
                });
            var r = a(7294),
                n = a(7764),
                l = a(1758),
                o = a(6059),
                s = a(6604);
            var c = r.forwardRef(function (e, t) {
                    return r.createElement(
                        "svg",
                        Object.assign(
                            {
                                xmlns: "http://www.w3.org/2000/svg",
                                fill: "none",
                                viewBox: "0 0 24 24",
                                strokeWidth: 2,
                                stroke: "currentColor",
                                "aria-hidden": "true",
                                ref: t,
                            },
                            e
                        ),
                        r.createElement("path", {
                            strokeLinecap: "round",
                            strokeLinejoin: "round",
                            d: "M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14",
                        })
                    );
                }),
                i = a(5861),
                m = a(7757),
                u = a.n(m),
                d = a(2081),
                h = a(8780),
                p = a(5689),
                v = a(1510),
                f = function () {
                    var e = r.useState(""),
                        t = e[0],
                        a = e[1],
                        n = r.useState(""),
                        l = n[0],
                        o = n[1],
                        s = r.useState(""),
                        c = s[0],
                        m = s[1],
                        f = r.useState(!1),
                        g = f[0],
                        k = f[1],
                        E = r.useState(!1),
                        b = E[0],
                        x = E[1],
                        y = (function () {
                            var e = (0, i.Z)(
                                u().mark(function e(a) {
                                    return u().wrap(
                                        function (e) {
                                            for (;;)
                                                switch ((e.prev = e.next)) {
                                                    case 0:
                                                        return (
                                                            a.preventDefault(),
                                                            k(!0),
                                                            (e.prev = 2),
                                                            (e.next = 5),
                                                            (0, v.v)(
                                                                "messages",
                                                                JSON.stringify({
                                                                    name: t,
                                                                    email: l,
                                                                    message: c,
                                                                })
                                                            )
                                                        );
                                                    case 5:
                                                        x(!0), (e.next = 11);
                                                        break;
                                                    case 8:
                                                        (e.prev = 8),
                                                            (e.t0 = e.catch(2)),
                                                            console.log(e.t0);
                                                    case 11:
                                                        k(!1);
                                                    case 12:
                                                    case "end":
                                                        return e.stop();
                                                }
                                        },
                                        e,
                                        null,
                                        [[2, 8]]
                                    );
                                })
                            );
                            return function (t) {
                                return e.apply(this, arguments);
                            };
                        })();
                    return r.createElement(
                        r.Fragment,
                        null,
                        r.createElement(
                            "form",
                            { className: "flex flex-col gap-6", onSubmit: y },
                            r.createElement(d.nv, {
                                required: !0,
                                label: "Name",
                                value: t,
                                onChange: a,
                            }),
                            r.createElement(d.nv, {
                                required: !0,
                                type: "email",
                                label: "Email",
                                value: l,
                                onChange: o,
                            }),
                            r.createElement(d.nv, {
                                required: !0,
                                as: "textarea",
                                label: "Message",
                                value: c,
                                onChange: m,
                            }),
                            r.createElement(
                                d.zx,
                                {
                                    loading: g,
                                    disabled: g,
                                    className: "lg:self-start",
                                },
                                "Submit"
                            )
                        ),
                        r.createElement(
                            h.u_,
                            {
                                show: b,
                                className: "w-[32rem]",
                                onClose: function () {
                                    a(""), o(""), m(""), x(!1);
                                },
                            },
                            r.createElement(
                                p.X6,
                                { as: "h2" },
                                "Hello ",
                                t,
                                ","
                            ),
                            r.createElement(
                                p.nv,
                                null,
                                "Thank you for reaching out to Vehikl. We will review your inquiry and respond to you soon."
                            )
                        )
                    );
                },
                g = function (e) {
                    var t = e.data.locations.nodes.map(function (e) {
                        return {
                            city: e.city,
                            id: e.id,
                            mapLink: e.mapLink,
                            postalCode: e.postalCode,
                            province: {
                                long: e.province.long,
                                short: e.province.short,
                            },
                            street: e.street,
                            country: e.country,
                        };
                    });
                    return r.createElement(
                        n.T,
                        {
                            title: "Contact Us",
                            description:
                                "Would you like to work with Vehikl on your next project? Curious about careers at Vehikl?",
                            ogUrl: "https://vehikl.com/contact",
                        },
                        r.createElement(l.j, {
                            heading: "Contact us",
                            image: 2,
                            description:
                                "Would you like to work with Vehikl on your next project? Curious about careers at Vehikl?",
                        }),
                        r.createElement(
                            o.W,
                            null,
                            r.createElement(
                                "div",
                                {
                                    className:
                                        "flex flex-col md:flex-row gap-8 text-lg",
                                },
                                r.createElement(
                                    "div",
                                    {
                                        className:
                                            "flex-1 mb-12 lg:mb-0 lg:pr-8 lg:border-r lg:border-gray-800",
                                    },
                                    r.createElement(
                                        s.X,
                                        { as: "h2" },
                                        "Get in touch"
                                    ),
                                    r.createElement(
                                        p.nv,
                                        { className: "mb-8" },
                                        "We'd love to talk to you! Get in touch via the contact form, or send us an email directly at",
                                        " ",
                                        r.createElement(
                                            "a",
                                            {
                                                href: "mailto:go@vehikl.com",
                                                className:
                                                    "text-brand-dark hover:underline",
                                            },
                                            "go@vehikl.com"
                                        ),
                                        " ",
                                        "or by phone at",
                                        " ",
                                        r.createElement(
                                            "a",
                                            {
                                                className:
                                                    "text-brand-dark hover:underline",
                                                href: "tel:5197469855",
                                            },
                                            "(519) 746-9855"
                                        ),
                                        "."
                                    ),
                                    r.createElement(f, null)
                                ),
                                r.createElement(
                                    "div",
                                    { className: "lg:w-96" },
                                    r.createElement(
                                        s.X,
                                        { as: "h2" },
                                        "Locations"
                                    ),
                                    r.createElement(
                                        "div",
                                        { className: "flex flex-col gap-4" },
                                        t.map(function (e) {
                                            return r.createElement(
                                                "address",
                                                {
                                                    className:
                                                        "flex flex-col not-italic border border-gray-800 rounded p-4 text-gray-400",
                                                    key: e.id,
                                                },
                                                r.createElement(
                                                    "span",
                                                    {
                                                        className:
                                                            "mb-1 flex items-center text-gray-300",
                                                    },
                                                    r.createElement(
                                                        "span",
                                                        {
                                                            className:
                                                                "font-medium",
                                                        },
                                                        e.city
                                                    ),
                                                    r.createElement(
                                                        "a",
                                                        {
                                                            href: e.mapLink,
                                                            rel: "noopener",
                                                            target: "_blank",
                                                            className:
                                                                "text-brand-dark hover:underline ml-auto",
                                                        },
                                                        "Map"
                                                    ),
                                                    r.createElement(c, {
                                                        className:
                                                            "w-5 h-5 ml-1 text-gray-500",
                                                    })
                                                ),
                                                r.createElement(
                                                    "span",
                                                    { className: "text-base" },
                                                    e.street
                                                ),
                                                r.createElement(
                                                    "span",
                                                    { className: "text-base" },
                                                    e.city,
                                                    ", ",
                                                    e.province.long
                                                ),
                                                r.createElement(
                                                    "span",
                                                    { className: "text-base" },
                                                    e.postalCode
                                                )
                                            );
                                        })
                                    )
                                )
                            )
                        )
                    );
                };
        },
    },
]);
//# sourceMappingURL=component---src-pages-contact-tsx-76c06cd1497cdac81c03.js.map
