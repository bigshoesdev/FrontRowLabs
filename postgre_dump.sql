PGDMP         0    
        	    w            frog    11.5    11.5                0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                       false                       1262    16393    frog    DATABASE     �   CREATE DATABASE frog WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'English_United States.1252' LC_CTYPE = 'English_United States.1252';
    DROP DATABASE frog;
             postgres    false            �            1259    16408    comments    TABLE     v   CREATE TABLE public.comments (
    user_id numeric(11,0),
    comment text,
    date date,
    id integer NOT NULL
);
    DROP TABLE public.comments;
       public         postgres    false            �            1259    16464    comments_id_seq    SEQUENCE     �   CREATE SEQUENCE public.comments_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.comments_id_seq;
       public       postgres    false    197                       0    0    comments_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.comments_id_seq OWNED BY public.comments.id;
            public       postgres    false    200            �            1259    16402 	   migration    TABLE     o   CREATE TABLE public.migration (
    version character varying(180)[] NOT NULL,
    apply_time numeric(11,0)
);
    DROP TABLE public.migration;
       public         postgres    false            �            1259    16451    users    TABLE       CREATE TABLE public.users (
    id integer NOT NULL,
    name character varying(255),
    username character varying(255),
    email character varying(255),
    phone character varying(255),
    subject character varying(255),
    password character varying(255),
    "authKey" character varying(255),
    "accessToken" character varying(255),
    "rememberMe" numeric(11,0),
    message text,
    image_src_filename text,
    status character varying(255),
    image_web_filename text,
    country_code character varying(255)
);
    DROP TABLE public.users;
       public         postgres    false            �            1259    16449    users_id_seq1    SEQUENCE     �   CREATE SEQUENCE public.users_id_seq1
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.users_id_seq1;
       public       postgres    false    199                       0    0    users_id_seq1    SEQUENCE OWNED BY     >   ALTER SEQUENCE public.users_id_seq1 OWNED BY public.users.id;
            public       postgres    false    198            �
           2604    16466    comments id    DEFAULT     j   ALTER TABLE ONLY public.comments ALTER COLUMN id SET DEFAULT nextval('public.comments_id_seq'::regclass);
 :   ALTER TABLE public.comments ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    200    197            �
           2604    16454    users id    DEFAULT     e   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq1'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    199    198    199            
          0    16408    comments 
   TABLE DATA               >   COPY public.comments (user_id, comment, date, id) FROM stdin;
    public       postgres    false    197          	          0    16402 	   migration 
   TABLE DATA               8   COPY public.migration (version, apply_time) FROM stdin;
    public       postgres    false    196   =                 0    16451    users 
   TABLE DATA               �   COPY public.users (id, name, username, email, phone, subject, password, "authKey", "accessToken", "rememberMe", message, image_src_filename, status, image_web_filename, country_code) FROM stdin;
    public       postgres    false    199   Z                  0    0    comments_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.comments_id_seq', 1, true);
            public       postgres    false    200                       0    0    users_id_seq1    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.users_id_seq1', 1, true);
            public       postgres    false    198            �
           2606    16474    comments comments_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.comments
    ADD CONSTRAINT comments_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.comments DROP CONSTRAINT comments_pkey;
       public         postgres    false    197            �
           2606    16459    users users_pkey1 
   CONSTRAINT     O   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey1 PRIMARY KEY (id);
 ;   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey1;
       public         postgres    false    199            
      x�3�,,O���4����� �'      	      x������ � �         ]   x�3�LO,-J,�񃲲Ks��2K��s3s���s9-�-L�͍��,9�K�JJ�K�r3��3��@��(-�8�A����0W� ��">     